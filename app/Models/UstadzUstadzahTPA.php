<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UstadzUstadzahTPA extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'alamat', 'gambar'
    ];
}
