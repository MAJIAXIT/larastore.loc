<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'iPhone'],
            ['name' => 'iPad'],
            ['name' => 'iMac'],
            ['name' => 'Watch']
        ]);

        DB::table('products')->insert([
            [
                'name' => 'iPhone 13',
                'description' => 'iPhone 13 is the newest iphone from apple',
                'image_path' => 'images/products/iphone13.png',
                'price' => 1000,
                'category_id' => 1
            ],

            [
                'name' => 'Macbook Air (M1)',
                'description' => 'Macbook air on arm chip is the revolution in the world of laptops',
                'image_path' => 'images/products/macbookairm1.png',
                'price' => 1500,
                'category_id' => 3
            ],
            [
                'name' => 'Apple Watch series 6',
                'description' => 'Apple Watch series 6 is the bestseller in the world of smart watches ',
                'image_path' => 'images/products/applewatch6.png',
                'price' => 300,
                'category_id' => 4
            ],
            [
                'name' => 'Apple Watch series 7',
                'description' => 'Apple Watch series 7 are newest watches from apple',
                'image_path' => 'images/products/applewatch7.png',
                'price' => 400,
                'category_id' => 4
            ],
            [
                'name' => 'Apple Watch SE series',
                'description' => 'Apple Watch SE series - collaboration apple with nike',
                'image_path' => 'images/products/applewatchse.png',
                'price' => 350,
                'category_id' => 4
            ],
            [
                'name' => 'Ipad Air',
                'description' => 'Ipad air is the bestseller in the world of tablets',
                'image_path' => 'images/products/ipadair.png',
                'price' => 500,
                'category_id' => 2
            ],
            [
                'name' => 'Ipad Mini',
                'description' => 'Ipad mini is the smallest tablet in the world',
                'image_path' => 'images/products/ipadmini.png',
                'price' => 600,
                'category_id' => 2
            ],
            [
                'name' => 'Ipad Pro',
                'description' => 'Ipad pro is the most powerful tablet in the world',
                'image_path' => 'images/products/ipadpro.png',
                'price' => 800,
                'category_id' => 2
            ],
            [
                'name' => 'iPhone 10',
                'description' => 'iPhone 10 is the phone for the real men',
                'image_path' => 'images/products/iphone10.png',
                'price' => 400,
                'category_id' => 1
            ],
            [
                'name' => 'iPhone 11 Pro',
                'description' => 'iPhone 11 pro is the coolest iPhone ever!!@!@!@!@!@!@!@!@',
                'image_path' => 'images/products/iphone11.png',
                'price' => 600,
                'category_id' => 1
            ],
            [
                'name' => 'Macbook Air (Intel)',
                'description' => 'Macbook air with intel core is very powerful',
                'image_path' => 'images/products/macbookair.png',
                'price' => 1200,
                'category_id' => 3
            ],
            [
                'name' => 'Macbook Pro (Intel)',
                'description' => 'Macbook pro with intel core is very powerful',
                'image_path' => 'images/products/macbookpro.png',
                'price' => 2000,
                'category_id' => 3
            ],
        ]);
        DB::table('users')->insert([
            [
            'name' => 'Иван',
            'email' => 'ivan@yandex.ru',
            'login' => 'ivan',
            'password' => '123'
            ]
        ]);
    }
}
