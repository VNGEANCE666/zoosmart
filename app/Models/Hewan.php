<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hewan extends Model
{
    protected $table = 'hewans';
    protected $fillable = ['id', 'gambar_hewan', 'nama_hewan', 'spesies', 'habitat', 'tanggal_lahir'];

    public function perawatan(){
        return $this->hasMany(Perawatan::class);
    }
    
    use HasFactory;
}
