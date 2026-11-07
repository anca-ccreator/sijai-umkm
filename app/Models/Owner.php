<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = [
        'nik',
        'nama_lengkap',
        'no_hp',
        'alamat_ktp',
        'rt_rw',
        'kelurahan_desa',
        'kecamatan',
        'kabupaten',
    ];

    public function businesses()
    {
        return $this->hasMany(Umkm::class, 'owner_id');
    }
}
