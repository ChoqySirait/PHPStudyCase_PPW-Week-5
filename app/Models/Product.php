<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Menentukan daftar kolom yang diizinkan untuk diisi secara langsung/massal (Mass Assignment)[cite: 6]
    protected $fillable = [
        'kode',
        'nama',
        'harga',
    ];
}
