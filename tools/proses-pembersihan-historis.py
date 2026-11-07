import openpyxl
import re
import json
import time
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

# Kodifikasi Kemendagri 9 Kecamatan Kabupaten Sinjai
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
    s = re.sub(r'\s+', ' ', s)
    return s

def clean_number(val):
    if val is None:
        return 0
    if isinstance(val, (int, float)):
        return float(val)
    s = str(val).strip()
    s = re.sub(r'[^\d\.\,\-]', '', s)
    s = s.replace(',', '.')
    try:
        return float(s)
    except:
        return 0

def detect_kecamatan(nik, address):
    nik_digits = re.sub(r'\D', '', nik or '')
    prefix = nik_digits[:6]
    if prefix in KEC_MAP:
        return KEC_MAP[prefix]
    
    # Fallback to address keywords
    addr_upper = (address or '').upper()
    for kec in KECAMATAN_LIST:
        if kec.upper() in addr_upper:
            return kec
            
    # Default Sinjai Utara jika tidak terdeteksi
    return 'Sinjai Utara'

def normalize_sektor(sektor_raw):
    s = (sektor_raw or '').upper()
    if any(k in s for k in ['KULINER', 'MAKAN', 'MINUM', 'PANGAN', 'ROTI', 'KOPI']):
        return 'Kuliner / Pengolahan Pangan'
    if any(k in s for k in ['DAGANG', 'JUAL', 'KIOS', 'TOKO', 'WARUNG', 'CAMPURAN', 'KLONTONG']):
        return 'Perdagangan & Eceran'
    if any(k in s for k in ['TERNAK', 'TANI', 'IKAN', 'KEBUN', 'SAPI', 'AYAM']):
        return 'Pertanian, Peternakan & Perikanan'
    if any(k in s for k in ['JASA', 'BENGKEL', 'SALON', 'JAHIT', 'LAUNDRY', 'FOTOCOPI']):
        return 'Jasa & Keterampilan'
    if any(k in s for k in ['INDUSTRI', 'KERAJINAN', 'ANYAMAN', 'MEUBEL', 'KAYU']):
        return 'Industri Kreatif & Kerajinan'
    return 'Perdagangan & Eceran'

def classify_izin(val, nib=None):
    if nib and len(str(nib)) in [12, 13]:
        return 'NIB_OSS'
    if not val or str(val).strip() in ['-', '0', 'TIDAK ADA', 'NIHIL', 'BELUM ADA', 'NONE', 'TDK ADA']:
        return 'BELUM_BERIZIN'
    s = str(val).upper().strip()
    if 'IUMK' in s:
        return 'IUMK_KECAMATAN'
    if 'SKU' in s or 'BN.SUT' in s or 'LURAH' in s or 'DESA' in s:
        return 'SKU_DESA_KELURAHAN'
    if 'PASAR' in s or 'UPTD' in s or 'DAGPRIN' in s:
        return 'UPTD_PASAR'
    if any(k in s for k in ['SIUP', 'SITU', 'TDP', 'HO']):
        return 'SIUP_SITU_TDP'
    if 'NIB' in s:
        return 'NIB_OSS'
    if '/' in s:
        return 'SKU_DESA_KELURAHAN'
    return 'SKU_DESA_KELURAHAN'

def clean_tahun(val):
    if not val:
        return None
    s = re.sub(r'\D', '', str(val).strip())
    if len(s) == 4:
        y = int(s)
        if 1950 <= y <= 2026:
            return y
    return None

def main():
    print('======================================================================')
    print('SIJAI UMKM — PROSES PEMBERSIHAN & DIAGNOSIS TEKNIS OTOMATIS (TAHAP 1)')
    print('======================================================================')
    t_start = time.time()

    conn = pymysql.connect(**DB_CONFIG)
    cur = conn.cursor()

    # 1. Analisis Awal Pemilik & Deteksi Duplikasi
    print('\n[1/5] Membaca Berkas & Menjalankan Analisis Duplikasi Lintas Data...')
    nik_to_names = {}
    duplicate_niks = set()

    # Pre-scan DATA UKM
    wb_ukm = openpyxl.load_workbook('DATA UKM.xlsx', read_only=True)
    ws_ukm = wb_ukm['Sheet1']
    for r in ws_ukm.iter_rows(min_row=4, values_only=True):
        if not any(r):
            continue
        nama = clean_text(r[7]).upper()
        nik = re.sub(r'\D', '', str(r[9] or ''))
        if len(nik) == 16:
            if nik in nik_to_names and nik_to_names[nik] != nama:
                duplicate_niks.add(nik)
            else:
                nik_to_names[nik] = nama

    # Pre-scan NIB
    wb_nib = openpyxl.load_workbook('5.213 NIB.xlsx', read_only=True)
    ws_nib = wb_nib['5.213']
    for r in ws_nib.iter_rows(min_row=8, values_only=True):
        if not any(r):
            continue
        nama = clean_text(r[1]).upper()
        nik = re.sub(r'\D', '', str(r[2] or ''))
        if len(nik) == 16:
            if nik in nik_to_names and nik_to_names[nik] != nama:
                duplicate_niks.add(nik)
            else:
                nik_to_names[nik] = nama

    print(f'   -> Teridentifikasi {len(nik_to_names):,} NIK unik.')
    print(f'   -> Terdeteksi {len(duplicate_niks):,} NIK dengan konflik nama berbeda (INDIKASI_DUPLIKAT).')

    # 2. Reset Tabel Data UMKM & Owners untuk Pengisian Bersih
    print('\n[2/5] Menyiapkan Tabel Basis Data...')
    cur.execute('SET FOREIGN_KEY_CHECKS = 0;')
    cur.execute('TRUNCATE TABLE umkm;')
    cur.execute('TRUNCATE TABLE owners;')
    cur.execute('SET FOREIGN_KEY_CHECKS = 1;')
    conn.commit()

    # 3. Proses DATA UKM.xlsx (~42.730 baris)
    print('\n[3/5] Memproses & Menormalisasi DATA UKM.xlsx...')
    now_str = datetime.now().strftime('%Y-%m-%d %H:%M:%S')
    
    owner_cache = {} # nik -> owner_id
    owners_batch = []
    umkm_batch = []
    
    count_ukm = 0
    clean_ukm = 0
    issues_ukm = {}

    batch_size = 2000

    def flush_batches():
        nonlocal owners_batch, umkm_batch
        if owners_batch:
            sql_owner = """
            INSERT INTO owners (id, nik, nama_lengkap, no_hp, alamat_ktp, rt_rw, kelurahan_desa, kecamatan, kabupaten, created_at, updated_at)
            VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)
            """
            cur.executemany(sql_owner, owners_batch)
            owners_batch = []
        if umkm_batch:
            sql_umkm = """
            INSERT INTO umkm (
                owner_id, nama_usaha, nib, izin_usaha, jenis_izin, alamat_usaha, rt_rw, kelurahan_desa, kecamatan, kabupaten,
                sektor, kbli, tahun_berdiri, deskripsi_produk, omset_bulanan, omset_tahunan, modal_usaha, modal_awal, modal_sekarang, aset, jumlah_karyawan,
                legalitas_halal, legalitas_pirt, legalitas_bpom, foto_usaha, status,
                catatan_verifikasi, verified_at, verified_by, is_clean, issue_flags, source_origin,
                created_at, updated_at
            ) VALUES (
                %s, %s, %s, %s, %s, %s, %s, %s, %s, %s,
                %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s,
                %s, %s, %s, %s, %s,
                %s, %s, %s, %s, %s, %s,
                %s, %s
            )
            """
            cur.executemany(sql_umkm, umkm_batch)
            umkm_batch = []
        conn.commit()

    current_owner_id = 1

    for r in ws_ukm.iter_rows(min_row=4, values_only=True):
        if not any(r):
            continue
        count_ukm += 1

        nama_usaha = clean_text(r[2])
        status_tempat = clean_text(r[3])
        bidang_sektor = clean_text(r[4])
        izin_usaha = clean_text(r[5])
        tahun_mulai = clean_text(r[6])
        nama_pemilik = clean_text(r[7]).upper()
        alamat_ktp = clean_text(r[8])
        nik_raw = str(r[9] or '').strip()
        
        # Ekstraksi Data Keuangan (Modal Awal, Modal Sekarang, Aset, Omzet Tahunan)
        modal_awal_raw = clean_number(r[10])
        if modal_awal_raw > 10_000_000_000 or str(r[10] or '').strip().startswith('628'):
            modal_awal = None # Netralkan anomali nomor HP
        elif modal_awal_raw > 0:
            modal_awal = modal_awal_raw
        else:
            modal_awal = None

        modal_sekarang_raw = clean_number(r[13])
        modal_sekarang = modal_sekarang_raw if 0 < modal_sekarang_raw <= 10_000_000_000 else None

        aset_raw = clean_number(r[14])
        aset = aset_raw if 0 < aset_raw <= 10_000_000_000 else None

        omzet_tahunan_raw = clean_number(r[15])
        omzet_tahunan = omzet_tahunan_raw if 0 < omzet_tahunan_raw <= 50_000_000_000 else None

        modal_usaha = modal_sekarang or modal_awal or 0

        tk_l = int(clean_number(r[16]))
        tk_p = int(clean_number(r[17]))
        total_tk = tk_l + tk_p
        if total_tk <= 0:
            total_tk = 1

        nik = re.sub(r'\D', '', nik_raw)
        kecamatan = detect_kecamatan(nik, alamat_ktp)
        sektor = normalize_sektor(bidang_sektor)
        omset_bulanan = round(omzet_tahunan / 12.0, 2) if omzet_tahunan else 0

        # Normalisasi NIB & Izin Usaha
        nib = None
        if izin_usaha and izin_usaha not in ['-', '0', 'TIDAK ADA', 'NIHIL', 'BELUM ADA', 'NONE', 'TDK ADA']:
            nib_clean = re.sub(r'\D', '', izin_usaha)
            if len(nib_clean) in [12, 13]:
                nib = nib_clean

        tahun_berdiri = clean_tahun(tahun_mulai)
        jenis_izin = classify_izin(izin_usaha, nib)
        izin_usaha_val = izin_usaha if izin_usaha and izin_usaha not in ['-', '0', 'TIDAK ADA', 'NIHIL', 'BELUM ADA', 'NONE', 'TDK ADA'] else None

        # Evaluasi Isu & Kualitas (CLN-01 s/d CLN-09)
        flags = []
        if len(nik) != 16:
            flags.append('NIK_TIDAK_VALID')
        if nik in duplicate_niks:
            flags.append('INDIKASI_DUPLIKAT')
        if not nama_usaha or nama_usaha in ['-', '0', 'TIDAK ADA', 'NIHIL', 'NONE']:
            flags.append('NAMA_USAHA_KOSONG')
            nama_usaha = f'Usaha {nama_pemilik.title()}' if nama_pemilik else 'Usaha Tanpa Nama'
        if not alamat_ktp or alamat_ktp in ['-', '0', 'TIDAK ADA', 'NIHIL']:
            flags.append('ALAMAT_OPERASIONAL_KOSONG')
            alamat_ktp = f'Kecamatan {kecamatan}'
        if (modal_sekarang and modal_sekarang < 0) or (omzet_tahunan and omzet_tahunan < 0):
            flags.append('NILAI_FINANSIAL_NEGATIF')
        if total_tk > 100:
            flags.append('ANOMALI_TENAGA_KERJA')

        is_clean = (len(flags) == 0)
        if is_clean:
            clean_ukm += 1
        else:
            for f in flags:
                issues_ukm[f] = issues_ukm.get(f, 0) + 1

        # Pemetaan Owner (Re-use jika NIK sama dan nama sama)
        owner_key = f'{nik}_{nama_pemilik}'
        if owner_key in owner_cache:
            owner_id = owner_cache[owner_key]
        else:
            owner_id = current_owner_id
            current_owner_id += 1
            owner_cache[owner_key] = owner_id
            owners_batch.append((
                owner_id,
                nik if len(nik) == 16 else None,
                nama_pemilik or 'NAMA TIDAK TERCATAT',
                None,
                alamat_ktp,
                None,
                None,
                kecamatan,
                'Sinjai',
                now_str,
                now_str
            ))

        umkm_batch.append((
            owner_id,
            nama_usaha,
            nib,
            izin_usaha_val,
            jenis_izin,
            alamat_ktp, # Lokasi fisik
            None,
            None,
            kecamatan,
            'Sinjai',
            sektor,
            None,
            tahun_berdiri,
            f'Usaha {bidang_sektor} sejak tahun {tahun_berdiri}' if tahun_berdiri else f'Usaha {bidang_sektor}',
            omset_bulanan,
            omzet_tahunan,
            modal_usaha,
            modal_awal,
            modal_sekarang,
            aset,
            total_tk,
            None, None, None, None,
            'DRAFT',
            None, None, None,
            is_clean,
            json.dumps(flags) if flags else None,
            'HISTORICAL_DATA_UKM',
            now_str,
            now_str
        ))

        if len(umkm_batch) >= batch_size:
            flush_batches()

    flush_batches()
    print(f'   -> Selesai memproses {count_ukm:,} baris DATA UKM.')
    print(f'   -> Bersih: {clean_ukm:,} | Bermasalah: {count_ukm - clean_ukm:,}')

    # 4. Proses 5.213 NIB.xlsx (~5.218 baris)
    print('\n[4/5] Memproses & Menormalisasi 5.213 NIB.xlsx...')
    count_nib = 0
    clean_nib = 0
    issues_nib = {}

    for r in ws_nib.iter_rows(min_row=8, values_only=True):
        if not any(r):
            continue
        count_nib += 1

        nama_lengkap = clean_text(r[1]).upper()
        nik_raw = str(r[2] or '').strip()
        no_hp = clean_text(r[3])
        jenis_kelamin = clean_text(r[4])
        alamat = clean_text(r[5])
        skala = clean_text(r[6])
        nib_raw = str(r[7] or '').strip()
        modal_raw = clean_number(r[8])
        modal_sekarang = modal_raw if 0 < modal_raw <= 10_000_000_000 else None
        modal_awal = None
        aset = None
        omzet_tahunan_raw = clean_number(r[9])
        omzet_tahunan = omzet_tahunan_raw if 0 < omzet_tahunan_raw <= 50_000_000_000 else None
        omset_bulanan = round(omzet_tahunan / 12.0, 2) if omzet_tahunan else 0
        modal_usaha = modal_sekarang or 0

        nik = re.sub(r'\D', '', nik_raw)
        nib = re.sub(r'\D', '', nib_raw) if nib_raw else None
        kecamatan = detect_kecamatan(nik, alamat)

        # Berkas NIB tidak memiliki kolom Nama Komersial Usaha
        nama_usaha = f'Usaha {nama_lengkap.title()}' if nama_lengkap else 'Usaha NIB Tanpa Nama'

        flags = ['NAMA_USAHA_KOSONG'] # NIB OSS wajib klarifikasi nama usaha riil
        if len(nik) != 16:
            flags.append('NIK_TIDAK_VALID')
        if nik in duplicate_niks:
            flags.append('INDIKASI_DUPLIKAT')
        if not alamat or alamat in ['-', '0', 'TIDAK ADA', 'NIHIL']:
            flags.append('ALAMAT_OPERASIONAL_KOSONG')
            alamat = f'Kecamatan {kecamatan}'

        is_clean = False # Selalu False karena NAMA_USAHA_KOSONG wajib klarifikasi
        for f in flags:
            issues_nib[f] = issues_nib.get(f, 0) + 1

        owner_key = f'{nik}_{nama_lengkap}'
        if owner_key in owner_cache:
            owner_id = owner_cache[owner_key]
        else:
            owner_id = current_owner_id
            current_owner_id += 1
            owner_cache[owner_key] = owner_id
            owners_batch.append((
                owner_id,
                nik if len(nik) == 16 else None,
                nama_lengkap or 'NAMA TIDAK TERCATAT',
                no_hp if no_hp and no_hp != '-' else None,
                alamat,
                None,
                None,
                kecamatan,
                'Sinjai',
                now_str,
                now_str
            ))

        nib_val = nib if nib and len(nib) in [12, 13] else None
        izin_usaha_val = nib_val
        jenis_izin = 'NIB_OSS'

        umkm_batch.append((
            owner_id,
            nama_usaha,
            nib_val,
            izin_usaha_val,
            jenis_izin,
            alamat,
            None,
            None,
            kecamatan,
            'Sinjai',
            'Perdagangan & Jasa (NIB OSS)',
            None,
            None, # tahun_berdiri
            f'Penerima NIB Skala {skala}' if skala else 'Penerima NIB OSS',
            omset_bulanan,
            omzet_tahunan,
            modal_usaha,
            modal_awal,
            modal_sekarang,
            aset,
            1, # Default
            None, None, None, None,
            'DRAFT',
            'Perlu pelengkapan nama komersial unit usaha dan verifikasi perizinan lapangan.',
            None, None,
            False,
            json.dumps(flags),
            'HISTORICAL_NIB_5213',
            now_str,
            now_str
        ))

        if len(umkm_batch) >= batch_size:
            flush_batches()

    flush_batches()
    print(f'   -> Selesai memproses {count_nib:,} baris NIB.')
    print(f'   -> Bermasalah (Wajib Peninjauan): {count_nib:,}')

    # 5. Catat Log Audit ke activity_logs
    print('\n[5/5] Mencatat Audit Trail Aktivitas...')
    total_records = count_ukm + count_nib
    total_clean = clean_ukm
    total_issues = (count_ukm - clean_ukm) + count_nib

    deskripsi = (
        f'Eksekusi Tahap 1: Pembersihan & Diagnosis Teknis Otomatis berhasil memproses {total_records:,} data. '
        f'Hasil diagnosis: {total_clean:,} unit usaha bersih (siap disahkan) dan {total_issues:,} unit usaha dengan catatan kritis '
        f'(duplikat, anomali tenaga kerja, NIK tidak valid, atau nama usaha belum tercatat).'
    )

    cur.execute("""
        INSERT INTO activity_logs (user_id, user_name, user_role, action, umkm_id, deskripsi, data_lama, data_baru, created_at)
        VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s)
    """, (
        1,
        'Administrator Sistem',
        'admin',
        'PEMBERSIHAN_DATA_HISTORIS_TAHAP_1',
        None,
        deskripsi,
        json.dumps({'status': 'DATA_MENTAH_EXCEL'}),
        json.dumps({
            'total_data': total_records,
            'data_bersih': total_clean,
            'data_bermasalah': total_issues,
            'isu_ukm': issues_ukm,
            'isu_nib': issues_nib
        }),
        now_str
    ))
    conn.commit()
    conn.close()

    t_elapsed = time.time() - t_start
    print('\n======================================================================')
    print('HASIL AKHIR PEMBERSIHAN DATA RESMI (TAHAP 1)')
    print('======================================================================')
    print(f'Total Waktu Pemrosesan : {t_elapsed:.2f} detik')
    print(f'Total Data Diproses    : {total_records:,} baris')
    print(f'[BERSIH] Data Lengkap  : {total_clean:,} baris (Siap Disahkan Masal)')
    print(f'[KRITIS] Perlu Ditinjau: {total_issues:,} baris (Perlu Peninjauan Petugas)')
    print('   - Indikasi Duplikat : ' + str(issues_ukm.get('INDIKASI_DUPLIKAT', 0) + issues_nib.get('INDIKASI_DUPLIKAT', 0)))
    print('   - NIK Tidak Valid   : ' + str(issues_ukm.get('NIK_TIDAK_VALID', 0) + issues_nib.get('NIK_TIDAK_VALID', 0)))
    print('   - Nama Usaha Kosong : ' + str(issues_ukm.get('NAMA_USAHA_KOSONG', 0) + issues_nib.get('NAMA_USAHA_KOSONG', 0)))
    print('   - Alamat Kosong     : ' + str(issues_ukm.get('ALAMAT_OPERASIONAL_KOSONG', 0) + issues_nib.get('ALAMAT_OPERASIONAL_KOSONG', 0)))
    print('   - Anomali TK/Tenaga : ' + str(issues_ukm.get('ANOMALI_TENAGA_KERJA', 0)))
    print('======================================================================\n')

if __name__ == '__main__':
    main()
