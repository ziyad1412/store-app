<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Laptop',
                'photo' => 'assets/category/laptop.png',
                'slug' => 'laptop',
            ],
            [
                'name' => 'Smartphone',
                'photo' => 'assets/category/smartphone.png',
                'slug' => 'smartphone',
            ],
            [
                'name' => 'Tablet',
                'photo' => 'assets/category/tablet.png',
                'slug' => 'tablet',
            ],
            [
                'name' => 'Mouse',
                'photo' => 'assets/category/mouse.png',
                'slug' => 'mouse',
            ],
            [
                'name' => 'Keyboard',
                'photo' => 'assets/category/keyboard.png',
                'slug' => 'keyboard',
            ],
            [
                'name' => 'Headphone',
                'photo' => 'assets/category/headphone.png',
                'slug' => 'headphone',
            ],
            [
                'name' => 'Camera',
                'photo' => 'assets/category/camera.png',
                'slug' => 'camera',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
