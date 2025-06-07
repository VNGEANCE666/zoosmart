<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perawatan extends Model
{
    protected $table = 'perawatans';
    protected $fillable = ['id', 'id_petugas', 'id_hewan', 'jenis_perawatan', 'jadwal_perawatan'];

    public function hewan(){
        return $this->belongsTo(Hewan::class);
    }

    public function petugas(){
        return $this->belongsTo(Petugas::class);
    }

    use HasFactory;
}
