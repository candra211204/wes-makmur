<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    // Pengisian untuk tabel produk
    protected $fillable = [
        'kategori_id',
        'namaProduk',
        'foto',
        'harga',
        'descProduk',
    ];

    // Relasi ke tabel post
    public function post()
    {
        return $this->hasMany(Post::class);
    }

    // Relasi ke tabel kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
