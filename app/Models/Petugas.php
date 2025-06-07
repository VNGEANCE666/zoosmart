<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Petugas extends Authenticatable
{
    use HasFactory;

    protected $table = 'petugas';
    protected $fillable = ['id', 'username', 'password', 'role', 'nama_petugas', 'jabatan', 'kontak', 'shift'];
    protected $hidden = ['password'];

    public function perawatan(){
        return $this->hasMany(Perawatan::class);
    }
}