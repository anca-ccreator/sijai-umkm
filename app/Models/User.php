<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'role',
        'dinas',
        'active',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'active' => 'boolean',
            'password' => 'hashed',
        ];
    }

    public function isOperator(): bool
    {
        return $this->role === 'operator';
    }

    public function isVerifikator(): bool
    {
        return in_array($this->role, ['verifikator', 'admin'], true);
    }

    public function isPimpinan(): bool
    {
        return in_array($this->role, ['pimpinan', 'admin'], true);
    }

    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }

    public function activityLogs()
    {
        return $this->hasMany(ActivityLog::class);
    }
}
