<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Iphone 14',
                'description' => 'Latest model of iPhone with advanced features.',
                'price' => 15000000,
                'stock' => 50,
                'image' => 'https://www.digimap.co.id/cdn/shop/files/iPhone_14_Purple_PDP_Image_Position-1A__WWEN_3538caee-2b52-4bdd-a8a2-2117d88a6be6.jpg?v=1717740746&width=823',
                'product_category_id' => 1,
            ],
            [
                'name' => 'Manual Book Laravel',
                'description' => 'Comprehensive guide to Laravel framework.',
                'price' => 150000,
                'stock' => 50,
                'image' => 'https://ebooks.gramedia.com/ebook-covers/30477/big_covers/ID_EMK2016MTH02MPMFL_B.jpg',
                'product_category_id' => 2,
            ],
            [
                'name' => 'Nasi Goreng',
                'description' => 'Delicious fried rice with vegetables and chicken.',
                'price' => 20000,
                'stock' => 50,
                'image' => 'https://cdn-2.tstatic.net/jateng/foto/bank/images/nasi-goreng.jpg',
                'product_category_id' => 3,
            ],
        ]);
    }
}
