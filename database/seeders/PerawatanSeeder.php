<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Perawatan;
use App\Models\Petugas;
use App\Models\Hewan;

class PerawatanSeeder extends Seeder
{
    public function run(): void
    {
        $petugasId = Petugas::query()->value('id');
        $hewanId = Hewan::query()->value('id');

        if ($petugasId && $hewanId) {
            Perawatan::create([
                'id_petugas' => $petugasId,
                'id_hewan' => $hewanId,
                'jenis_perawatan' => 'Pemeriksaan Kesehatan',
                'jadwal_perawatan' => now(),
            ]);
        }
    }
}
