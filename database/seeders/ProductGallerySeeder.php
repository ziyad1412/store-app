<?php

namespace Database\Seeders;

use App\Models\ProductGallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $galleries = [
            [
                'photos' => 'assets/product/laptop1.jpg',
                'products_id' => 1,
            ],
            [
                'photos' => 'assets/product/laptop2.jpg',
                'products_id' => 2,
            ],
            [
                'photos' => 'assets/product/laptop3.jpg',
                'products_id' => 3,
            ],
            [
                'photos' => 'assets/product/laptop4.jpg',
                'products_id' => 4,
            ],
            [
                'photos' => 'assets/product/laptop5.jpg',
                'products_id' => 5,
            ],
            [
                'photos' => 'assets/product/laptop6.jpg',
                'products_id' => 6,
            ],
        ];

        foreach ($galleries as $gallery) {
            ProductGallery::create($gallery);
        }
    }
}
