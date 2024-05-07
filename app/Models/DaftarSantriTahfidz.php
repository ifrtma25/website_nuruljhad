<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarSantriTahfidz extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'alamat', 'tanggal_lahir', 'gambar',
    ];
}
