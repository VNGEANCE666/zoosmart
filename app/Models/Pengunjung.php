<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    protected $table = 'pengunjungs';
    protected $fillable = ['id', 'email', 'nama_pengunjung'];

    public function pembelian(){
        return $this->hasMany(Pembelian::class);
    }

    use HasFactory;
}
