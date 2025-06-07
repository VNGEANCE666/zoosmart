<?php

namespace Database\Seeders;

use App\Models\Petugas;
use Illuminate\Database\Seeder;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $petugas = new Petugas();
        $petugas->username = "petugas1";
        $petugas->password = bcrypt("satrio123");
        $petugas->nama_petugas = "Satrio Pamungkas";
        $petugas->jabatan = 'Petugas Kesehatan';
        $petugas->kontak = '08888888888888';
        $petugas->shift = '1';
        $petugas->save();
    }
}
