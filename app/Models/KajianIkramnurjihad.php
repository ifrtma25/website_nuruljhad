<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KajianIkramnurjihad extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_penceramah', 'tema', 'tanggal', 'gambar'
    ];
}
