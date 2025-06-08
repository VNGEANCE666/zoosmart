<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $table = 'pembelians';
    protected $fillable = ['order_id', 'id_tiket', 'id_pengunjung', 'tanggal_pembelian', 'status_transaksi'];

    use HasFactory;
}
