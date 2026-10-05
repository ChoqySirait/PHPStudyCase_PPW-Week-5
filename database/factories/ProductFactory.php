<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Mendefinisikan struktur data acak realistis untuk uji coba.
     */
    public function definition(): array
    {
        return [
            // Menghasilkan kode unik acak format PRD-3Angka
            'kode'  => 'PRD' . $this->faker->unique()->numberBetween(100, 999),

            // Menghasilkan nama produk acak
            'nama'  => $this->faker->words(2, true),

            // Menghasilkan nominal harga kelipatan ribuan
            'harga' => $this->faker->numberBetween(10, 500) * 1000,
        ];
    }
}
