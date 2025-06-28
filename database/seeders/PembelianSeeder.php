<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pembelian;

class PembelianSeeder extends Seeder
{
    public function run(): void
    {
        Pembelian::create([
            'order_id' => 'ORD001',
            'id_tiket' => 1,
            'id_pengunjung' => 1,
            'tanggal_pembelian' => now(),
            'status_transaksi' => 'pending',
        ]);
    }
}
