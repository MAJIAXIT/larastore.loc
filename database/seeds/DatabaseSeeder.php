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
                'description' => '13ve iphone',
                'image_path' => 'images/products/iphone13.png',
                'price' => 1000,
                'category_id' => 1
            ],

            [
                'name' => 'macbook air M1 ',
                'description' => 'ARM is the best',
                'image_path' => 'images/products/macbookairm1.png',
                'price' => 1500,
                'category_id' => 3
            ],
        ]);
    }
}
