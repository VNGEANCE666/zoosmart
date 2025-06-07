<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perawatan extends Model
{
    use HasFactory;
    protected $table = 'perawatans';
    protected $fillable = ['id', 'id_petugas', 'id_hewan', 'jenis_perawatan', 'jadwal_perawatan'];

    public function hewan(){
        return $this->belongsTo(Hewan::class, 'id_hewan');
    }

    public function petugas(){
        return $this->belongsTo(Petugas::class, 'id_petugas');
    }

}
