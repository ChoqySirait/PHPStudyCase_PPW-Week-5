<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; // Mengimpor ProductController agar dapat dipanggil oleh rute[cite: 7]

// Mendefinisikan 7 aksi rute CRUD sekaligus yang otomatis terhubung ke ProductController[cite: 7]
Route::resource('products', ProductController::class);

// Mengalihkan halaman utama (/) langsung ke rute katalog produk
Route::get('/', function () {
    return redirect()->route('products.index');
});
