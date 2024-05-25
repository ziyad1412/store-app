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
                'name' => 'MacBook Air M1',
                'users_id' => 1,
                'categories_id' => 1,
                'slug' => Str::slug('MacBook Air M1'),
                'price' => 15000000,
                'description' => 'MacBook Air M1 adalah laptop ringan dan tipis dari Apple yang cocok untuk pengguna yang membutuhkan portabilitas. Dilengkapi dengan layar Retina yang tajam, prosesor Apple M1 yang kuat, dan baterai yang tahan lama, MacBook Air ideal untuk pekerjaan sehari-hari, pembelajaran, dan hiburan.'
            ],
            [
                'name' => 'MacBook Pro 13-inch',
                'users_id' => 1,
                'categories_id' => 1,
                'slug' => Str::slug('MacBook Pro 13-inch'),
                'price' => 25000000,
                'description' => 'MacBook Pro 13-inch adalah laptop yang powerful dan portabel. Ditenagai oleh prosesor Intel Core i5 atau i7, dengan layar Retina yang brilian dan Touch Bar inovatif, MacBook Pro 13-inch sangat cocok untuk profesional kreatif dan pengguna yang membutuhkan kinerja tinggi dalam paket yang ringkas.'
            ],
            [
                'name' => 'MacBook Pro 16-inch',
                'users_id' => 1,
                'categories_id' => 1,
                'slug' => Str::slug('MacBook Pro 16-inch'),
                'price' => 40000000,
                'description' => 'MacBook Pro 16-inch adalah laptop premium dengan layar besar yang menakjubkan dan performa luar biasa. Ditenagai oleh prosesor Intel Core i7 atau i9, dengan grafis Radeon Pro yang kuat, dan sistem audio yang mengagumkan, MacBook Pro 16-inch adalah pilihan ideal untuk para profesional yang membutuhkan kemampuan kreatif yang tinggi.'
            ],
            [
                'name' => 'MacBook Pro M1',
                'users_id' => 1,
                'categories_id' => 1,
                'slug' => Str::slug('MacBook Pro M1'),
                'price' => 25000000,
                'description' => 'MacBook Pro M1 adalah laptop ultraportabel yang cocok untuk pengguna yang selalu bergerak. Dengan desain yang ramping dan bobot yang ringan, MacBook mudah dibawa ke mana saja. Dilengkapi dengan keyboard butterfly dan layar Retina yang cerah, MacBook menawarkan kombinasi yang sempurna antara kinerja dan portabilitas.'
            ],
            [
                'name' => 'MacBook Pro M2 (2023)',
                'users_id' => 1,
                'categories_id' => 1,
                'slug' => Str::slug('MacBook Pro M2 (2023)'),
                'price' => 30000000,
                'description' => 'MacBook Pro M2 (2023) adalah model terbaru dari lini MacBook Pro yang disempurnakan. Ditenagai oleh chip M2 yang inovatif, dengan layar Mini-LED yang menakjubkan dan Touch Bar yang dioptimalkan, MacBook Pro 14-inch menawarkan pengalaman pengguna yang luar biasa untuk para profesional yang mengutamakan kinerja dan keandalan.'
            ],
            [
                'name' => 'Dell XPS 13',
                'users_id' => 1,
                'categories_id' => 2,
                'slug' => Str::slug('Dell XPS 13'),
                'price' => 23000000,
                'description' => 'Dell XPS 13 adalah laptop ultraportabel yang menawarkan kinerja tinggi dalam desain yang ramping. Dilengkapi dengan layar InfinityEdge yang hampir tanpa bezel, prosesor Intel Core i5 atau i7, dan baterai yang tahan lama, Dell XPS 13 cocok untuk pekerjaan dan hiburan di mana saja.'
            ],
            [
                'name' => 'Dell XPS 15',
                'users_id' => 1,
                'categories_id' => 2,
                'slug' => Str::slug('Dell XPS 15'),
                'price' => 30000000,
                'description' => 'Dell XPS 15 adalah laptop premium dengan layar InfinityEdge 15,6 inci yang menakjubkan. Ditenagai oleh prosesor Intel Core i7 atau i9, dengan pilihan grafis NVIDIA GeForce GTX, dan audio berkualitas tinggi, Dell XPS 15 adalah pilihan ideal untuk para profesional yang membutuhkan kinerja tinggi dan visual yang luar biasa.'
            ],
            [
                'name' => 'Dell Inspiron 14 5000',
                'users_id' => 1,
                'categories_id' => 2,
                'slug' => Str::slug('Dell Inspiron 14 5000'),
                'price' => 15000000,
                'description' => 'Dell Inspiron 14 5000 adalah laptop yang cocok untuk penggunaan sehari-hari, baik untuk pekerjaan atau hiburan. Dengan layar Full HD 14 inci, prosesor Intel Core i5, dan penyimpanan SSD yang cepat, Dell Inspiron 14 5000 menawarkan kinerja yang handal dengan harga yang terjangkau.'
            ],
            [
                'name' => 'Dell Inspiron 15 7000 Gaming',
                'users_id' => 1,
                'categories_id' => 2,
                'slug' => Str::slug('Dell Inspiron 15 7000 Gaming'),
                'price' => 20000000,
                'description' => 'Dell Inspiron 15 7000 Gaming adalah laptop yang dirancang khusus untuk gaming. Dilengkapi dengan prosesor Intel Core i7, grafis NVIDIA GeForce GTX, dan layar Full HD 15,6 inci dengan refresh rate tinggi, Dell Inspiron 15 7000 Gaming menawarkan pengalaman gaming yang imersif dan responsif.'
            ],
            [
                'name' => 'Dell Latitude 14 7000',
                'users_id' => 1,
                'categories_id' => 2,
                'slug' => Str::slug('Dell Latitude 14 7000'),
                'price' => 28000000,
                'description' => 'Dell Latitude 14 7000 adalah laptop bisnis premium dengan desain yang tangguh dan fitur keamanan yang kuat. Ditenagai oleh prosesor Intel Core i7, dengan layar Full HD 14 inci dan baterai yang tahan lama, Dell Latitude 14 7000 adalah pilihan yang ideal untuk para profesional yang membutuhkan mobilitas dan keandalan dalam satu paket.'
            ],
            [
                'name' => 'ASUS ROG Zephyrus G14',
                'users_id' => 1,
                'categories_id' => 3,
                'slug' => Str::slug('ASUS ROG Zephyrus G14'),
                'price' => 28000000,
                'description' => 'ASUS ROG Zephyrus G14 adalah laptop gaming yang ringkas dan kuat. Dilengkapi dengan prosesor AMD Ryzen 9, grafis NVIDIA GeForce RTX, dan layar 14 inci dengan refresh rate tinggi, Zephyrus G14 menawarkan performa gaming yang superior dalam paket yang portabel.'
            ],
            [
                'name' => 'ASUS ZenBook 14',
                'users_id' => 1,
                'categories_id' => 3,
                'slug' => Str::slug('ASUS ZenBook 14'),
                'price' => 18000000,
                'description' => 'ASUS ZenBook 14 adalah laptop ultraportabel dengan desain premium dan kinerja yang tangguh. Dengan layar Full HD NanoEdge 14 inci, prosesor Intel Core i7, dan penyimpanan SSD cepat, ZenBook 14 ideal untuk produktivitas dan hiburan di mana saja.'
            ],
            [
                'name' => 'ASUS VivoBook S15',
                'users_id' => 1,
                'categories_id' => 3,
                'slug' => Str::slug('ASUS VivoBook S15'),
                'price' => 15000000,
                'description' => 'ASUS VivoBook S15 adalah laptop stylish dengan kinerja yang handal. Dilengkapi dengan layar NanoEdge 15,6 inci, prosesor Intel Core i5, dan desain ErgoLift yang ergonomis, VivoBook S15 cocok untuk penggunaan sehari-hari, baik untuk pekerjaan atau hiburan.'
            ],
            [
                'name' => 'ASUS ROG Strix Scar 15',
                'users_id' => 1,
                'categories_id' => 3,
                'slug' => Str::slug('ASUS ROG Strix Scar 15'),
                'price' => 35000000,
                'description' => 'ASUS ROG Strix Scar 15 adalah laptop gaming premium dengan performa yang luar biasa. Ditenagai oleh prosesor AMD Ryzen 9, grafis NVIDIA GeForce RTX, dan layar Full HD 15,6 inci dengan refresh rate tinggi, Strix Scar 15 menawarkan pengalaman gaming yang immersive dan responsif.'
            ],
            [
                'name' => 'ASUS TUF Gaming A15',
                'users_id' => 1,
                'categories_id' => 3,
                'slug' => Str::slug('ASUS TUF Gaming A15'),
                'price' => 20000000,
                'description' => 'ASUS TUF Gaming A15 adalah laptop gaming yang tangguh dengan harga terjangkau. Dilengkapi dengan prosesor AMD Ryzen 7, grafis NVIDIA GeForce GTX, dan layar Full HD 15,6 inci dengan refresh rate tinggi, TUF Gaming A15 ideal untuk para gamer yang mengutamakan performa dan ketahanan.'
            ],
            [
                'name' => 'Acer Swift 3',
                'users_id' => 1,
                'categories_id' => 4,
                'slug' => Str::slug('Acer Swift 3'),
                'price' => 12000000,
                'description' => 'Acer Swift 3 adalah laptop ringan dengan kinerja yang handal. Dilengkapi dengan prosesor AMD Ryzen 5, layar Full HD 14 inci, dan desain yang stylish, Swift 3 cocok untuk produktivitas sehari-hari dan hiburan.'
            ],
            [
                'name' => 'Acer Aspire 5',
                'users_id' => 1,
                'categories_id' => 4,
                'slug' => Str::slug('Acer Aspire 5'),
                'price' => 10000000,
                'description' => 'Acer Aspire 5 adalah laptop yang terjangkau dengan fitur-fitur yang komprehensif. Dengan prosesor Intel Core i5, layar Full HD 15,6 inci, dan grafis NVIDIA GeForce MX350, Aspire 5 ideal untuk multitasking dan hiburan.'
            ],
            [
                'name' => 'Acer Predator Helios 300',
                'users_id' => 1,
                'categories_id' => 4,
                'slug' => Str::slug('Acer Predator Helios 300'),
                'price' => 28000000,
                'description' => 'Acer Predator Helios 300 adalah laptop gaming yang kuat dengan performa yang mengagumkan. Ditenagai oleh prosesor Intel Core i7, grafis NVIDIA GeForce RTX, dan layar Full HD 15,6 inci dengan refresh rate tinggi, Helios 300 menawarkan pengalaman gaming yang immersive dan responsif.'
            ],
            [
                'name' => 'Acer Chromebook Spin 713',
                'users_id' => 1,
                'categories_id' => 4,
                'slug' => Str::slug('Acer Chromebook Spin 713'),
                'price' => 14000000,
                'description' => 'Acer Chromebook Spin 713 adalah laptop 2-in-1 yang fleksibel dengan sistem operasi Chrome OS. Dilengkapi dengan layar touchscreen Full HD 13,5 inci, prosesor Intel Core i5, dan penyimpanan SSD cepat, Chromebook Spin 713 cocok untuk produktivitas dan penggunaan sehari-hari.'
            ],
            [
                'name' => 'Acer Nitro 5',
                'users_id' => 1,
                'categories_id' => 4,
                'slug' => Str::slug('Acer Nitro 5'),
                'price' => 18000000,
                'description' => 'Acer Nitro 5 adalah laptop gaming yang terjangkau dengan performa yang solid. Dengan prosesor AMD Ryzen 5, grafis NVIDIA GeForce GTX, dan layar Full HD 15,6 inci dengan refresh rate tinggi, Nitro 5 memberikan pengalaman gaming yang memuaskan tanpa harus merusak anggaran.'
            ],
            [
                'name' => 'Lenovo ThinkPad X1 Carbon',
                'users_id' => 1,
                'categories_id' => 5,
                'slug' => Str::slug('Lenovo ThinkPad X1 Carbon'),
                'price' => 30000000, // in rupiah
                'description' => 'Lenovo ThinkPad X1 Carbon adalah laptop bisnis premium dengan kinerja tinggi dan desain ultra-ringan. Ditenagai oleh prosesor Intel Core i7, layar 14 inci Full HD, dan daya tahan baterai yang luar biasa, ThinkPad X1 Carbon ideal untuk para profesional yang membutuhkan mobilitas tinggi.'
            ],
            [
                'name' => 'Lenovo Yoga C940',
                'users_id' => 1,
                'categories_id' => 5,
                'slug' => Str::slug('Lenovo Yoga C940'),
                'price' => 25000000, // in rupiah
                'description' => 'Lenovo Yoga C940 adalah laptop 2-in-1 dengan performa tinggi dan fleksibilitas luar biasa. Dilengkapi dengan prosesor Intel Core i7, layar touchscreen 14 inci 4K, dan desain convertible, Yoga C940 memungkinkan Anda bekerja dan bermain dengan cara yang lebih interaktif.'
            ],
            [
                'name' => 'Lenovo Legion 5',
                'users_id' => 1,
                'categories_id' => 5,
                'slug' => Str::slug('Lenovo Legion 5'),
                'price' => 20000000, // in rupiah
                'description' => 'Lenovo Legion 5 adalah laptop gaming dengan performa tinggi dan desain yang stylish. Ditenagai oleh prosesor AMD Ryzen 7, grafis NVIDIA GeForce GTX, dan layar Full HD 15,6 inci dengan refresh rate tinggi, Legion 5 memberikan pengalaman gaming yang luar biasa.'
            ],
            [
                'name' => 'Lenovo IdeaPad Flex 5',
                'users_id' => 1,
                'categories_id' => 5,
                'slug' => Str::slug('Lenovo IdeaPad Flex 5'),
                'price' => 15000000, // in rupiah
                'description' => 'Lenovo IdeaPad Flex 5 adalah laptop 2-in-1 yang serbaguna dengan kinerja yang handal. Dilengkapi dengan prosesor Intel Core i5, layar touchscreen 14 inci Full HD, dan desain convertible, IdeaPad Flex 5 memungkinkan Anda bekerja, belajar, dan bermain dengan fleksibilitas maksimal.'
            ],
            [
                'name' => 'Lenovo ThinkBook 14',
                'users_id' => 1,
                'categories_id' => 5,
                'slug' => Str::slug('Lenovo ThinkBook 14'),
                'price' => 12000000, // in rupiah
                'description' => 'Lenovo ThinkBook 14 adalah laptop bisnis yang menawarkan keseimbangan antara kinerja dan portabilitas. Ditenagai oleh prosesor Intel Core i5, layar Full HD 14 inci, dan fitur keamanan yang kuat, ThinkBook 14 adalah pilihan yang tepat untuk para profesional yang membutuhkan perangkat yang handal dan aman.'
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
