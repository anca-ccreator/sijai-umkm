<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\Umkm;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class PembersihanDataController extends Controller
{
    public function index(Request $request)
    {
        $filterKecamatan = $request->input('kecamatan');
        $filterIssue = $request->input('issue');

        $baseQuery = Umkm::where('status', 'DRAFT');
        if (!empty($filterKecamatan) && $filterKecamatan !== 'SEMUA') {
            $baseQuery->where('kecamatan', $filterKecamatan);
        }

        // 3 Kartu Diagnosis Utama (menyesuaikan dengan filter lokasi)
        $dataBersihCount = (clone $baseQuery)->where('is_clean', true)->count();
        $masalahKritisCount = (clone $baseQuery)->where('is_clean', false)->count();
        $masalahRinganCount = (clone $baseQuery)
            ->where(function ($q) {
                $q->whereNull('legalitas_halal')->orWhereNull('legalitas_pirt');
            })->count();

        // Sub-Kategori Masalah Kritis
        $duplikatCount = (clone $baseQuery)->where('is_clean', false)
            ->where('issue_flags', 'like', '%INDIKASI_DUPLIKAT%')->count();
        $nikSalahCount = (clone $baseQuery)->where('is_clean', false)
            ->where('issue_flags', 'like', '%NIK_TIDAK_VALID%')->count();
        $alamatKosongCount = (clone $baseQuery)->where('is_clean', false)
            ->where('issue_flags', 'like', '%ALAMAT_OPERASIONAL_KOSONG%')->count();
        $namaKosongCount = (clone $baseQuery)->where('is_clean', false)
            ->where('issue_flags', 'like', '%NAMA_USAHA_KOSONG%')->count();

        // Query Daftar Masalah
        $query = (clone $baseQuery)->with('owner');

        if ($filterIssue === 'BERSIH') {
            $query->where('is_clean', true);
        } elseif ($filterIssue) {
            $query->where('is_clean', false)->where('issue_flags', 'like', "%{$filterIssue}%");
        } else {
            // Default tampilkan yang ada masalah
            $query->where('is_clean', false);
        }

        $records = $query->paginate(15)->withQueryString();

        $daftarKecamatan = [
            'Sinjai Utara', 'Sinjai Timur', 'Sinjai Selatan', 'Sinjai Barat',
            'Sinjai Tengah', 'Bulupoddo', 'Sinjai Borong', 'Tellu Limpoe', 'Pulau Sembilan'
        ];

        return view('pembersihan.index', compact(
            'dataBersihCount', 'masalahKritisCount', 'masalahRinganCount',
            'duplikatCount', 'nikSalahCount', 'alamatKosongCount', 'namaKosongCount',
            'records', 'filterIssue', 'filterKecamatan', 'daftarKecamatan'
        ));
    }

    public function sahkanMasal(Request $request)
    {
        $kecamatan = $request->input('kecamatan');
        $query = Umkm::where('is_clean', true)->where('status', 'DRAFT');
        if (!empty($kecamatan) && $kecamatan !== 'SEMUA') {
            $query->where('kecamatan', $kecamatan);
        }
        $total = $query->count();

        if ($total === 0) {
            return back()->with('info', 'Tidak ada data bersih berstatus draf yang siap disahkan untuk cakupan ini.');
        }

        $catatan = (!empty($kecamatan) && $kecamatan !== 'SEMUA')
            ? "Disahkan secara masal tingkat Kecamatan {$kecamatan} melalui fitur Diagnosis Otomatis Data Bersih."
            : 'Disahkan secara masal melalui fitur Diagnosis Otomatis Data Bersih.';

        $query->update([
            'status' => 'RESMI',
            'catatan_verifikasi' => $catatan,
            'verified_at' => now(),
            'verified_by' => auth()->id(),
        ]);

        ActivityLog::record(
            'SAHKAN_MASAL',
            (!empty($kecamatan) && $kecamatan !== 'SEMUA')
                ? "Pengesahan masal otomatis untuk $total data UMKM bersih di Kecamatan $kecamatan"
                : "Pengesahan masal otomatis untuk $total data UMKM bersih di Kabupaten Sinjai",
            null,
            ['status' => 'DRAFT', 'kecamatan' => $kecamatan ?? 'SEMUA'],
            ['status' => 'RESMI', 'jumlah' => $total]
        );

        $msgKec = (!empty($kecamatan) && $kecamatan !== 'SEMUA') ? "di Kecamatan $kecamatan" : "seluruh Kabupaten Sinjai";
        return redirect()->route('pembersihan.index', !empty($kecamatan) && $kecamatan !== 'SEMUA' ? ['kecamatan' => $kecamatan] : [])
            ->with('success', "Alhamdulillah! Sebanyak $total data UMKM yang bersih {$msgKec} telah berhasil disahkan resmi sekaligus.");
    }

    public function unduhMasalahKecamatan(Request $request): StreamedResponse
    {
        $kecamatan = $request->input('kecamatan');
        $isSemua = empty($kecamatan) || $kecamatan === 'SEMUA';
        $fileName = 'Daftar-Masalah-UMKM-' . ($isSemua ? 'Kabupaten-Sinjai' : str_replace(' ', '-', $kecamatan)) . '-' . date('Y-m-d') . '.csv';

        return response()->streamDownload(function () use ($kecamatan, $isSemua) {
            $handle = fopen('php://output', 'w');
            fprintf($handle, chr(0xEF).chr(0xBB).chr(0xBF)); // UTF-8 BOM

            $judul = $isSemua 
                ? "LEMBAR KERJA VERIFIKASI LAPANGAN DATA BERMASALAH - SELURUH KABUPATEN SINJAI"
                : "LEMBAR KERJA VERIFIKASI LAPANGAN DATA BERMASALAH - KECAMATAN " . strtoupper($kecamatan);

            fputcsv($handle, [$judul]);
            fputcsv($handle, ['Tanggal Cetak:', date('d-m-Y H:i')]);
            fputcsv($handle, ['Petunjuk:', 'Gunakan lembar kerja ini untuk menelusuri kebenaran data di kantor desa/kelurahan setempat.']);
            fputcsv($handle, []);

            fputcsv($handle, [
                'No',
                'ID UMKM',
                'Nama Usaha Saat Ini',
                'Nama Pemilik',
                'NIK Terdaftar',
                'No HP',
                'Alamat Usaha Saat Ini',
                'Desa / Kelurahan',
                'Kecamatan',
                'Kategori Masalah',
                'Koreksi Nama Usaha Sebenarnya (Diisi Petugas)',
                'Koreksi NIK Asli 16 Digit (Diisi Petugas)',
                'Koreksi Alamat Lapak/Kios (Diisi Petugas)',
                'Status Lapangan (Aktif / Tutup / Pindah)',
            ]);

            $no = 1;
            $query = Umkm::with('owner')
                ->where('is_clean', false)
                ->where('status', 'DRAFT');

            if (!$isSemua) {
                $query->where('kecamatan', $kecamatan);
            }

            $items = $query->cursor();

            foreach ($items as $item) {
                $flags = implode(', ', $item->issue_flags ?? ['PERLU_KLARIFIKASI']);
                fputcsv($handle, [
                    $no++,
                    $item->id,
                    $item->nama_usaha,
                    $item->owner?->nama_lengkap ?? '-',
                    $item->owner?->nik ? "'" . $item->owner->nik : '-',
                    $item->owner?->no_hp ?? '-',
                    $item->alamat_usaha ?? '-',
                    $item->kelurahan_desa ?? '-',
                    $item->kecamatan ?? '-',
                    $flags,
                    '', // kolom kosong untuk diisi petugas lapangan
                    '',
                    '',
                    '',
                ]);
            }

            fclose($handle);
        }, $fileName, [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => "attachment; filename=\"$fileName\"",
        ]);
    }
}
