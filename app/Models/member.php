<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika tidak sesuai dengan konvensi (opsional)
    protected $table = 'members';

    // Menentukan kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'nama',
        'email',
    ];

    // Menentukan kolom yang tidak dapat diisi (optional)
    // protected $guarded = [];
}

