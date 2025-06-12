<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    protected $table = 'tikets';
    protected $fillable = ['id', 'harga', 'tanggal_kunjungan', 'jumlah_orang', 'is_used'];

    public function pembelian()
    {
        return $this->hasMany(Pembelian::class, 'id_tiket', 'id');
    }
    use HasFactory;
}
