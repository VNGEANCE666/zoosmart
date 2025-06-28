<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hewan;

class HewanSeeder extends Seeder
{
    public function run(): void
    {
        Hewan::create([
            'gambar_hewan' => 'lion.jpg',
            'nama_hewan' => 'Singa',
            'spesies' => 'Panthera leo',
            'habitat' => 'Sabana',
            'tanggal_lahir' => '2018-05-10',
        ]);
    }
}
