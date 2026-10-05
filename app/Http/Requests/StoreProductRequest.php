<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Menentukan apakah pengguna diizinkan melakukan aksi pengiriman form ini.
     */
    public function authorize(): bool
    {
        // Mengubah ke true agar seluruh pengguna diizinkan mengirim data[cite: 11]
        return true;
    }

    /**
     * Mendefinisikan aturan validasi data input produk[cite: 11].
     */
    public function rules(): array
    {
        return [
            'kode'  => 'required|unique:products|max:10',
            'nama'  => 'required|min:3',
            'harga' => 'required|numeric|min:1000',
        ];
    }
}
