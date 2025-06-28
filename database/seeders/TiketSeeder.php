<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tiket;

class TiketSeeder extends Seeder
{
    public function run(): void
    {
        Tiket::create([
            'harga' => 50000,
            'tanggal_kunjungan' => '2024-07-01',
            'jumlah_orang' => 2,
            'is_used' => false,
        ]);
    }
}
