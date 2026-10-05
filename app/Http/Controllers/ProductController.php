<?php

namespace App\Http\Controllers;

use App\Models\Product; // Mengimpor Model Product untuk akses query database[cite: 8]
use Illuminate\Http\Request;
use Illuminate\View\View; // Memastikan kembalian berupa tampilan Blade[cite: 8]
use Illuminate\Http\RedirectResponse; // Memastikan kembalian berupa pengalihan URL[cite: 8]

class ProductController extends Controller
{
    /**
     * Menampilkan daftar produk terpaginasi[cite: 8].
     */
    public function index(): View
    {
        // Mengambil produk terbaru dan membaginya 10 data per halaman[cite: 8]
        $products = Product::latest()->paginate(10);

        // Mengirimkan variabel data produk ke tampilan products/index.blade.php[cite: 8]
        return view('products.index', compact('products'));
    }

    /**
     * Memvalidasi dan menyimpan rekaman produk baru[cite: 8].
     */
    public function store(Request $request): RedirectResponse
    {
        // Memvalidasi data inputan sesuai aturan batasan karakter dan tipe data[cite: 8]
        $valid = $request->validate([
            'kode'  => 'required|unique:products|max:10',
            'nama'  => 'required|min:3',
            'harga' => 'required|numeric|min:1000',
        ]);

        // Menyimpan data terverifikasi ke tabel products via Eloquent[cite: 8]
        Product::create($valid);

        // Mengalihkan pengguna kembali ke rute indeks produk[cite: 8]
        return redirect()->route('products.index');
    }
}
