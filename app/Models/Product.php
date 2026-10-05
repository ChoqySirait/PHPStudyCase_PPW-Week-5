<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory; // Mengaktifkan fitur generasi data dummy via factory

    protected $fillable = [
        'kode',
        'nama',
        'harga',
    ];
}
