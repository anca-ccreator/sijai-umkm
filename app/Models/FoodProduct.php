<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodProduct extends Model
{
    use HasFactory;

    protected $table = 'food_products';

    protected $fillable = [
        'umkm_id',
        'nama_produk',
        'kategori_produk',
        'merek_produk',
        'satuan_produk',
        'bahan_baku_utama',
        'sumber_bahan_baku',
        'kapasitas_produksi_bulanan',
        'realisasi_produksi_bulanan',
        'satuan_produksi',
        'legalitas_halal',
        'tgl_halal_berlaku',
        'legalitas_pirt',
        'tgl_pirt_berlaku',
        'legalitas_bpom',
        'status_higiene',
        'catatan_sanitasi',
        'status_verifikasi',
        'verified_by',
        'verified_at',
    ];

    protected function casts(): array
    {
        return [
            'kapasitas_produksi_bulanan' => 'decimal:2',
            'realisasi_produksi_bulanan' => 'decimal:2',
            'tgl_halal_berlaku' => 'date',
            'tgl_pirt_berlaku' => 'date',
            'verified_at' => 'datetime',
        ];
    }

    public function umkm()
    {
        return $this->belongsTo(Umkm::class, 'umkm_id');
    }

    public function verifier()
    {
        return $this->belongsTo(User::class, 'verified_by');
    }

    public function isHalal(): bool
    {
        return !empty($this->legalitas_halal);
    }

    public function isPirt(): bool
    {
        return !empty($this->legalitas_pirt);
    }

    public function isBpom(): bool
    {
        return !empty($this->legalitas_bpom);
    }

    public function isVerified(): bool
    {
        return $this->status_verifikasi === 'TERVERIFIKASI';
    }

    public function isLayakHigiene(): bool
    {
        return $this->status_higiene === 'LAYAK_HIGIENE';
    }

    // Scopes
    public function scopeTerverifikasi($query)
    {
        return $query->where('status_verifikasi', 'TERVERIFIKASI');
    }

    public function scopeHalal($query)
    {
        return $query->whereNotNull('legalitas_halal')->where('legalitas_halal', '!=', '');
    }

    public function scopePirt($query)
    {
        return $query->whereNotNull('legalitas_pirt')->where('legalitas_pirt', '!=', '');
    }

    public function scopeBpom($query)
    {
        return $query->whereNotNull('legalitas_bpom')->where('legalitas_bpom', '!=', '');
    }

    public function scopeLayakHigiene($query)
    {
        return $query->where('status_higiene', 'LAYAK_HIGIENE');
    }
}
