<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Kategori;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat 5 User, masing-masing punya 3 Product,
        // dan setiap Product punya 2 Kategori
        User::factory(5)->create()->each(function ($user) {
            Product::factory(3)->create(['user_id' => $user->id])->each(function ($product) {
                Kategori::factory(2)->create(['product_id' => $product->id]);
            });
        });
    }
}
