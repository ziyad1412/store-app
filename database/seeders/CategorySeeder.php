<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Apple',
                'photo' => 'assets/category/apple.png',
                'slug' => Str::slug('Apple')
            ],
            [
                'name' => 'Dell',
                'photo' => 'assets/category/dell.png',
                'slug' => Str::slug('Dell')
            ],
            [
                'name' => 'Asus',
                'photo' => 'assets/category/asus.png',
                'slug' => Str::slug('ASUS')
            ],
            [
                'name' => 'Acer',
                'photo' => 'assets/category/acer.png',
                'slug' => Str::slug('Acer')
            ],
            [
                'name' => 'Lenovo',
                'photo' => 'assets/category/lenovo.png',
                'slug' => Str::slug('Lenovo')
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
