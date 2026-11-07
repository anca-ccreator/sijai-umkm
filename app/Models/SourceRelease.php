<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SourceRelease extends Model
{
    protected $table = 'source_releases';
    protected $primaryKey = 'release_id';

    protected $fillable = [
        'version',
        'release_name',
        'manifest_sha256',
        'package_sha256',
        'file_count',
        'status',
        'summary',
        'deployed_by',
        'deployed_at',
    ];

    protected $casts = [
        'deployed_at' => 'datetime',
        'file_count' => 'integer',
    ];
}
