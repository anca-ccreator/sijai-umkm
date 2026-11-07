import openpyxl
import re
import difflib
import pymysql
from datetime import datetime

# Konfigurasi Koneksi MySQL SIJAI UMKM
DB_CONFIG = {
    'host': '127.0.0.1',
    'port': 33070,
    'user': 'sijai_dev_migrator',
    'password': 'a040122659652e099fcc2970228daf3e51a7334078f36d3049f52d0cfe43c79c',
    'database': 'sijai_umkm_g1b1_dev',
    'charset': 'utf8mb4',
    'autocommit': False
}

KEC_MAP = {
    '730701': 'Sinjai Barat',
    '730702': 'Sinjai Selatan',
    '730703': 'Sinjai Timur',
    '730704': 'Sinjai Tengah',
    '730705': 'Sinjai Utara',
    '730706': 'Bulupoddo',
    '730707': 'Sinjai Borong',
    '730708': 'Tellu Limpoe',
    '730709': 'Pulau Sembilan'
}

KECAMATAN_LIST = [
    'Sinjai Utara', 'Sinjai Timur', 'Sinjai Selatan', 'Sinjai Barat',
    'Sinjai Tengah', 'Bulupoddo', 'Sinjai Borong', 'Tellu Limpoe', 'Pulau Sembilan'
]

def clean_text(val):
    if val is None:
        return ''
    s = str(val).strip()
    return re.sub(r'\s+', ' ', s)

def clean_number(val):
    if val is None:
        return 0.0
    if isinstance(val, (int, float)):
        return float(val)
    s = str(val).strip()
    s = re.sub(r'[^\d\.\,\-]', '', s)
    s = s.replace(',', '.')
    try:
        return float(s)
    except:
        return 0.0

def detect_kecamatan(nik, address):
    nik_digits = re.sub(r'\D', '', nik or '')
    prefix = nik_digits[:6]
    if prefix in KEC_MAP:
        return KEC_MAP[prefix]
    
    addr_upper = (address or '').upper()
    for kec in KECAMATAN_LIST:
        if kec.upper() in addr_upper:
            return kec
            
    return 'Sinjai Utara'

def normalize_name(s):
    return re.sub(r'\s+', ' ', re.sub(r'[^A-Z0-9 ]', '', str(s or '').upper())).strip()

def run():
    print('==> Membuka koneksi database...')
    conn = pymysql.connect(**DB_CONFIG)
    cur = conn.cursor()

    # Preload pemilik dan unit usaha dari DATA UKM Dinas Koperasi
    print('==> Memuat data UMKM Dinas Koperasi (HISTORICAL_DATA_UKM)...')
    cur.execute('''
        SELECT o.id as owner_id, o.nik, o.nama_lengkap, u.id as umkm_id, u.nama_usaha, u.kecamatan, u.alamat_usaha
        FROM owners o
        JOIN umkm u ON u.owner_id = o.id
        WHERE u.source_origin = 'HISTORICAL_DATA_UKM'
    ''')
    
    db_owners = {}
    for row in cur.fetchall():
        oid, nik, nama, uid, nama_u, kec, alamat_u = row
        clean_nik = str(nik).strip() if nik else ''
        if clean_nik:
            if clean_nik not in db_owners:
                db_owners[clean_nik] = []
            db_owners[clean_nik].append({
                'owner_id': oid,
                'nama': nama,
                'umkm_id': uid,
                'nama_usaha': nama_u,
                'kecamatan': kec,
                'alamat': alamat_u
            })
    print(f'==> {len(db_owners)} NIK unik pemilik terdaftar di Dinas Koperasi.')

    print('==> Membaca berkas 5.213 NIB.xlsx (Sheet: 5.213)...')
    wb = openpyxl.load_workbook('5.213 NIB.xlsx', read_only=True)
    sheet = wb['5.213']

    # Kosongkan tabel nib_records jika sudah ada data sebelumnya
    cur.execute('TRUNCATE TABLE nib_records')
    conn.commit()

    insert_sql = '''
        INSERT INTO nib_records (
            no_urut, nama_lengkap, nik, nib, telepon, jenis_kelamin,
            alamat, kecamatan, skala_usaha, modal_usaha, omset_tahunan,
            reconciliation_status, matched_umkm_id, similarity_score,
            match_notes, created_at, updated_at
        ) VALUES (
            %s, %s, %s, %s, %s, %s,
            %s, %s, %s, %s, %s,
            %s, %s, %s,
            %s, %s, %s
        )
    '''

    records_to_insert = []
    now = datetime.now()

    count_total = 0
    count_potential = 0
    count_conflict = 0
    count_no_match = 0

    for row in sheet.iter_rows(min_row=8, values_only=True):
        raw_no = row[0]
        raw_nama = clean_text(row[1])
        raw_ktp = clean_text(row[2])
        raw_telp = clean_text(row[3])
        raw_jk = clean_text(row[4])
        raw_alamat = clean_text(row[5])
        raw_skala = clean_text(row[6])
        raw_nib = clean_text(row[7])
        raw_modal = clean_number(row[8])
        raw_omzet = clean_number(row[9])

        if not raw_nama and not raw_ktp and not raw_nib:
            continue

        count_total += 1
        no_urut = int(raw_no) if raw_no and str(raw_no).isdigit() else count_total
        kecamatan = detect_kecamatan(raw_ktp, raw_alamat)
        norm_nama_ptsp = normalize_name(raw_nama)

        clean_nik = re.sub(r'\D', '', raw_ktp.split()[0]) if raw_ktp else ''
        if len(clean_nik) > 16:
            clean_nik = clean_nik[:16]

        matched_umkm_id = None
        similarity_score = 0.0
        status = 'NO_MATCH'
        notes = 'NIB Mandiri: Belum tercatat di database UMKM Dinas Koperasi (Potensi data baru berizin OSS).'

        if clean_nik and clean_nik in db_owners:
            candidates = db_owners[clean_nik]
            best_candidate = None
            best_ratio = 0.0

            for cand in candidates:
                cand_name = normalize_name(cand['nama'])
                ratio = difflib.SequenceMatcher(None, norm_nama_ptsp, cand_name).ratio()
                if ratio > best_ratio:
                    best_ratio = ratio
                    best_candidate = cand

            similarity_score = round(best_ratio * 100, 2)
            matched_umkm_id = best_candidate['umkm_id'] if best_candidate else None

            if best_ratio >= 0.70:
                status = 'POTENTIAL_MATCH'
                count_potential += 1
                cand_nama_u = best_candidate['nama_usaha'] or '(Nama Usaha Belum Diisi)'
                cand_kec = best_candidate['kecamatan'] or kecamatan
                notes = f"Kandidat Klop: NIK identik, nama cocok ({similarity_score}%). Siap ditautkan ke UMKM '{cand_nama_u}' (Kec. {cand_kec})."
            else:
                status = 'CONFLICTING_INFO'
                count_conflict += 1
                koperasi_name = best_candidate['nama'] if best_candidate else '-'
                cand_nama_u = best_candidate['nama_usaha'] or '-'
                notes = f"Konflik Identitas: NIK sama, tetapi nama DPMPTSP '{raw_nama}' berbeda dengan nama Dinas Koperasi '{koperasi_name}' (kemiripan {similarity_score}%). Usaha: '{cand_nama_u}'. Wajib verifikasi fisik."
        else:
            count_no_match += 1

        records_to_insert.append((
            no_urut, raw_nama, raw_ktp, raw_nib, raw_telp, raw_jk,
            raw_alamat, kecamatan, raw_skala, raw_modal, raw_omzet,
            status, matched_umkm_id, similarity_score,
            notes, now, now
        ))

        if len(records_to_insert) >= 500:
            cur.executemany(insert_sql, records_to_insert)
            conn.commit()
            records_to_insert = []

    if records_to_insert:
        cur.executemany(insert_sql, records_to_insert)
        conn.commit()

    wb.close()
    conn.close()

    print('=====================================================')
    print('HASIL REKONSILIASI IRISAN DATA NIB vs UMKM (TAHAP 1)')
    print('=====================================================')
    print(f'Total Berkas NIB Diproses   : {count_total} baris')
    print(f'1. Kandidat Klop (POTENTIAL): {count_potential} baris (Siap Tautkan NIB)')
    print(f'2. Konflik Nama  (CONFLICT) : {count_conflict} baris (Wajib Verifikasi Lapangan)')
    print(f'3. NIB Mandiri   (NO_MATCH) : {count_no_match} baris (Unit Usaha Baru OSS)')
    print('=====================================================')

if __name__ == '__main__':
    run()
