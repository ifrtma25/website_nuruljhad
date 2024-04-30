<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KajianNuruljihad extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_penceramah', 'tema', 'tanggal', 'gambar'
    ];
}
