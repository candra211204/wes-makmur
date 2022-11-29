<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Pengisian untuk tabel post
    protected $fillable = [
        'produk_id',
        'judul',
        'penulis',
        'isi',
        'tanggalDibuat',
    ];

    // Relasi ke tabel produk 
    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
