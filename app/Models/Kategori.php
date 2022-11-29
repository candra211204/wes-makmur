<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    // Pengisian untuk tabel kategori
    protected $fillable = [
        'namaKategori',
        'descKategori',
    ];

    // Relasi ke tabel produk
    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
}
