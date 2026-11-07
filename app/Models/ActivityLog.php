<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'user_name',
        'user_role',
        'action',
        'umkm_id',
        'deskripsi',
        'data_lama',
        'data_baru',
        'created_at',
    ];

    protected function casts(): array
    {
        return [
            'data_lama' => 'array',
            'data_baru' => 'array',
            'created_at' => 'datetime',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function umkm()
    {
        return $this->belongsTo(Umkm::class);
    }

    public static function record(string $action, string $deskripsi, ?Umkm $umkm = null, ?array $dataLama = null, ?array $dataBaru = null): self
    {
        $user = auth()->user();

        return static::create([
            'user_id' => $user?->id,
            'user_name' => $user?->name ?? 'Sistem',
            'user_role' => $user?->role ?? 'system',
            'action' => $action,
            'umkm_id' => $umkm?->id,
            'deskripsi' => $deskripsi,
            'data_lama' => $dataLama,
            'data_baru' => $dataBaru,
            'created_at' => now(),
        ]);
    }
}
