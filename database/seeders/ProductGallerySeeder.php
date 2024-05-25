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
                'photos' => 'assets/product/1.jpg',
                'products_id' => 1,
            ],
            [
                'photos' => 'assets/product/2.jpg',
                'products_id' => 2,
            ],
            [
                'photos' => 'assets/product/3.jpg',
                'products_id' => 3,
            ],
            [
                'photos' => 'assets/product/4.jpg',
                'products_id' => 4,
            ],
            [
                'photos' => 'assets/product/5.jpg',
                'products_id' => 5,
            ],
            [
                'photos' => 'assets/product/6.jpg',
                'products_id' => 6,
            ],
            [
                'photos' => 'assets/product/7.jpg',
                'products_id' => 7,
            ],
            [
                'photos' => 'assets/product/8.jpg',
                'products_id' => 8,
            ],
            [
                'photos' => 'assets/product/9.jpg',
                'products_id' => 9,
            ],
            [
                'photos' => 'assets/product/10.jpg',
                'products_id' => 10,
            ],
            [
                'photos' => 'assets/product/11.jpg',
                'products_id' => 11,
            ],
            [
                'photos' => 'assets/product/12.jpg',
                'products_id' => 12,
            ],
            [
                'photos' => 'assets/product/13.jpg',
                'products_id' => 13,
            ],
            [
                'photos' => 'assets/product/14.jpg',
                'products_id' => 14,
            ],
            [
                'photos' => 'assets/product/15.jpg',
                'products_id' => 15,
            ],
            [
                'photos' => 'assets/product/16.jpg',
                'products_id' => 16,
            ],
            [
                'photos' => 'assets/product/17.jpg',
                'products_id' => 17,
            ],
            [
                'photos' => 'assets/product/18.jpg',
                'products_id' => 18,
            ],
            [
                'photos' => 'assets/product/19.jpg',
                'products_id' => 19,
            ],
            [
                'photos' => 'assets/product/20.jpg',
                'products_id' => 20,
            ],
            [
                'photos' => 'assets/product/21.jpg',
                'products_id' => 21,
            ],
            [
                'photos' => 'assets/product/22.jpg',
                'products_id' => 22,
            ],
            [
                'photos' => 'assets/product/23.jpg',
                'products_id' => 23,
            ],
            [
                'photos' => 'assets/product/24.jpg',
                'products_id' => 24,
            ],
            [
                'photos' => 'assets/product/25.jpg',
                'products_id' => 25,
            ],
        ];

        foreach ($galleries as $gallery) {
            ProductGallery::create($gallery);
        }
    }
}
