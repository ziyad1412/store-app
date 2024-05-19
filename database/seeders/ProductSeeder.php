<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Samsung Galaxy Book Flex',
                'users_id' => 1,
                'categories_id' => 1,
                'slug' => Str::slug('Samsung Galaxy Book Flex'),
                'price' => 1399, // in dollars
                'description' => 'The Samsung Galaxy Book Flex features a QLED display and comes with a built-in S Pen.'
            ],
            [
                'name' => 'Samsung Galaxy Book Ion',
                'users_id' => 1,
                'categories_id' => 1,
                'slug' => Str::slug('Samsung Galaxy Book Ion'),
                'price' => 1249,
                'description' => 'The Samsung Galaxy Book Ion is known for its lightweight design and long battery life.'
            ],
            [
                'name' => 'Samsung Notebook 9 Pro',
                'users_id' => 1,
                'categories_id' => 1,
                'slug' => Str::slug('Samsung Notebook 9 Pro'),
                'price' => 1099,
                'description' => 'The Samsung Notebook 9 Pro is a powerful 2-in-1 laptop with a sleek metal design.'
            ],
            [
                'name' => 'Samsung Galaxy Book S',
                'users_id' => 1,
                'categories_id' => 1,
                'slug' => Str::slug('Samsung Galaxy Book S'),
                'price' => 999,
                'description' => 'The Samsung Galaxy Book S offers mobile computing with LTE connectivity and a lightweight design.'
            ],
            [
                'name' => 'Samsung Chromebook Plus',
                'users_id' => 1,
                'categories_id' => 1,
                'slug' => Str::slug('Samsung Chromebook Plus'),
                'price' => 499,
                'description' => 'The Samsung Chromebook Plus is a versatile 2-in-1 device with a built-in pen and a 360-degree rotating screen.'
            ],
            [
                'name' => 'Samsung Galaxy Book Go',
                'users_id' => 1,
                'categories_id' => 1,
                'slug' => Str::slug('Samsung Galaxy Book Go'),
                'price' => 349,
                'description' => 'The Samsung Galaxy Book Go is an affordable laptop with a durable design and long-lasting battery.'
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
