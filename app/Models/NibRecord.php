<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NibRecord extends Model
{
    use HasFactory;

    protected $table = 'nib_records';

    protected $fillable = [
        'no_urut',
        'nama_lengkap',
        'nik',
        'nib',
        'telepon',
        'jenis_kelamin',
        'alamat',
        'kecamatan',
        'skala_usaha',
        'modal_usaha',
        'omset_tahunan',
        'reconciliation_status',
        'matched_umkm_id',
        'similarity_score',
        'match_notes',
        'reconciled_by',
        'reconciled_at',
    ];

    protected $casts = [
        'modal_usaha' => 'decimal:2',
        'omset_tahunan' => 'decimal:2',
        'similarity_score' => 'decimal:2',
        'reconciled_at' => 'datetime',
    ];

    public function matchedUmkm()
    {
        return $this->belongsTo(Umkm::class, 'matched_umkm_id');
    }

    public function reconciler()
    {
        return $this->belongsTo(User::class, 'reconciled_by');
    }

    /**
     * Sensor NIK untuk kepatuhan UU Perlindungan Data Pribadi (UU PDP No. 27/2022)
     */
    public function getMaskedNikAttribute(): string
    {
        $nik = (string) $this->nik;
        if (strlen($nik) >= 16) {
            return substr($nik, 0, 6) . '******' . substr($nik, -4);
        }
        return $nik ?: '-';
    }

    /**
     * Label dan styling status rekonsiliasi
     */
    public function getStatusBadgeAttribute(): array
    {
        return match ($this->reconciliation_status) {
            'POTENTIAL_MATCH' => [
                'label' => 'Kandidat Klop',
                'bg' => 'bg-emerald-100 text-emerald-800 border-emerald-300',
                'icon' => '🟢'
            ],
            'CONFLICTING_INFO' => [
                'label' => 'Konflik Identitas',
                'bg' => 'bg-rose-100 text-rose-800 border-rose-300',
                'icon' => '🔴'
            ],
            'NO_MATCH' => [
                'label' => 'NIB Mandiri',
                'bg' => 'bg-slate-100 text-slate-700 border-slate-300',
                'icon' => '⚪'
            ],
            'LINKED' => [
                'label' => 'Sudah Ditautkan',
                'bg' => 'bg-blue-100 text-blue-800 border-blue-300',
                'icon' => '🔗'
            ],
            'SEPARATED' => [
                'label' => 'Usaha Mandiri/Cabang',
                'bg' => 'bg-purple-100 text-purple-800 border-purple-300',
                'icon' => '🔀'
            ],
            'REJECTED' => [
                'label' => 'Ditolak',
                'bg' => 'bg-gray-100 text-gray-700 border-gray-300',
                'icon' => '⛔'
            ],
            default => [
                'label' => $this->reconciliation_status,
                'bg' => 'bg-slate-100 text-slate-700 border-slate-300',
                'icon' => '❓'
            ],
        };
    }
}
