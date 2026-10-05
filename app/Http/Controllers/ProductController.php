<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest; // Mengimpor Form Request khusus validasi[cite: 11]
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = Product::latest()->paginate(10);
        return view('products.index', compact('products'));
    }

    /**
     * Memvalidasi otomatis via StoreProductRequest sebelum menyimpan produk.
     */
    public function store(StoreProductRequest $request): RedirectResponse
    {
        // Menyimpan data yang telah lolos validasi otomatis[cite: 8, 11]
        Product::create($request->validated());

        // Mengalihkan kembali ke rute indeks (Pola PRG: Post-Redirect-Get)[cite: 8, 12]
        return redirect()->route('products.index');
    }
}
