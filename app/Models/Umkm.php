<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Umkm extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'umkm';

    protected $fillable = [
        'owner_id',
        'nama_usaha',
        'nib',
        'izin_usaha',
        'jenis_izin',
        'alamat_usaha',
        'rt_rw',
        'kelurahan_desa',
        'kecamatan',
        'kabupaten',
        'sektor',
        'kbli',
        'tahun_berdiri',
        'deskripsi_produk',
        'omset_bulanan',
        'omset_tahunan',
        'modal_usaha',
        'modal_awal',
        'modal_sekarang',
        'aset',
        'jumlah_karyawan',
        'legalitas_halal',
        'legalitas_pirt',
        'legalitas_bpom',
        'foto_usaha',
        'status',
        'catatan_verifikasi',
        'verified_at',
        'verified_by',
        'is_clean',
        'issue_flags',
        'source_origin',
    ];

    protected function casts(): array
    {
        return [
            'is_clean' => 'boolean',
            'issue_flags' => 'array',
            'verified_at' => 'datetime',
            'omset_bulanan' => 'decimal:2',
            'omset_tahunan' => 'decimal:2',
            'modal_usaha' => 'decimal:2',
            'modal_awal' => 'decimal:2',
            'modal_sekarang' => 'decimal:2',
            'aset' => 'decimal:2',
            'jumlah_karyawan' => 'integer',
            'tahun_berdiri' => 'integer',
        ];
    }

    // Accessors Kematangan Usaha & Formalitas Izin
    public function getUsiaUsahaAttribute(): ?int
    {
        if ($this->tahun_berdiri && $this->tahun_berdiri >= 1950 && $this->tahun_berdiri <= (int) date('Y')) {
            return (int) date('Y') - (int) $this->tahun_berdiri;
        }
        return null;
    }

    public function getKategoriKematanganAttribute(): string
    {
        $usia = $this->usia_usaha;
        if ($usia === null) {
            return 'Belum Dicatat';
        }
        if ($usia < 3) {
            return 'Usaha Rintisan (< 3 Thn)';
        }
        if ($usia <= 5) {
            return 'Usaha Berkembang (3-5 Thn)';
        }
        return 'Usaha Mapan (> 5 Thn)';
    }

    public function getNamaJenisIzinAttribute(): string
    {
        return match ($this->jenis_izin) {
            'NIB_OSS' => 'NIB OSS RBA (Pusat)',
            'IUMK_KECAMATAN' => 'IUMK (Kecamatan)',
            'SKU_DESA_KELURAHAN' => 'SKU (Desa/Lurah)',
            'UPTD_PASAR' => 'Izin UPTD Pasar Sentral',
            'SIUP_SITU_TDP' => 'Izin Usaha Klasik (SIUP/SITU)',
            default => 'Belum Berizin (Informal)'
        };
    }

    // Accessors Keuangan & Skala Usaha (PP 7/2021)
    public function getPertumbuhanModalAttribute(): ?float
    {
        if ($this->modal_awal !== null && $this->modal_sekarang !== null) {
            return (float) ($this->modal_sekarang - $this->modal_awal);
        }
        return null;
    }

    public function getSkalaUsahaAttribute(): string
    {
        $omzet = (float) ($this->omset_tahunan ?? ($this->omset_bulanan ? $this->omset_bulanan * 12 : 0));
        $modal = (float) ($this->modal_sekarang ?? $this->modal_usaha ?? 0);

        if ($modal > 5000000000 || $omzet > 15000000000) {
            return 'Usaha Menengah';
        }
        if ($modal > 1000000000 || $omzet > 2000000000) {
            return 'Usaha Kecil';
        }
        return 'Usaha Mikro';
    }

    public function owner()
    {
        return $this->belongsTo(Owner::class, 'owner_id');
    }

    public function verifier()
    {
        return $this->belongsTo(User::class, 'verified_by');
    }

    public function foodProducts()
    {
        return $this->hasMany(FoodProduct::class, 'umkm_id');
    }

    public function activityLogs()
    {
        return $this->hasMany(ActivityLog::class, 'umkm_id')->latest();
    }

    // Scopes
    public function scopeResmi($query)
    {
        return $query->where('status', 'RESMI');
    }

    public function scopeDraft($query)
    {
        return $query->where('status', 'DRAFT');
    }

    public function scopePerluPerbaikan($query)
    {
        return $query->where('status', 'PERBAIKAN');
    }

    public function scopeClean($query)
    {
        return $query->where('is_clean', true);
    }

    public function scopeWithIssues($query)
    {
        return $query->where('is_clean', false);
    }
}
