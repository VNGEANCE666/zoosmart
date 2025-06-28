<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengunjung;

class PengunjungSeeder extends Seeder
{
    public function run(): void
    {
        Pengunjung::create([
            'email' => 'pengunjung1@mail.com',
            'nama_pengunjung' => 'Budi Santoso',
        ]);
    }
}
