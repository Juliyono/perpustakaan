<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika tidak sesuai dengan konvensi (opsional)
    protected $table = 'bukus';

    // Menentukan kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'judul',
        'penulis',
        'kategori',
        'tahun_terbit',
    ];

    // Menentukan kolom yang tidak dapat diisi (optional)
    // protected $guarded = [];
}
