<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Memunculkan 50 data sampel produk ke dalam database.
     */
    public function run(): void
    {
        // Otomatis membuat 50 data produk acak realistis[cite: 16]
        Product::factory(50)->create();
    }
}
