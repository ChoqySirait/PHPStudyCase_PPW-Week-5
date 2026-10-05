<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Membangun skema struktur tabel 'products'.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            // Primary key id bertipe auto-increment[cite: 5]
            $table->id();

            // Kolom kode barang bersifat unik dengan batas 10 karakter[cite: 5]
            $table->string('kode', 10)->unique();

            // Kolom nama barang dengan batas 100 karakter[cite: 5]
            $table->string('nama', 100);

            // Kolom harga bertipe integer positif (tanpa nilai minus)[cite: 5]
            $table->unsignedInteger('harga');

            // Pencatat waktu otomatis created_at dan updated_at[cite: 5]
            $table->timestamps();
        });
    }

    /**
     * Menghapus tabel 'products' saat proses rollback[cite: 5].
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
