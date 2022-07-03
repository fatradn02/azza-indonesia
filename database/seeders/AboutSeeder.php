<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::truncate();
        About::create([
            'title' => 'About Us',
            'content_1' => 'AZZA INDONESIA SUPPLIER company engaged in the export of commodity products from Indonesia, We are engaged in manufacturing with export quality, Our products come from the territory of Indonesia.',
            'content_2' => 'We are the place for those of you who are looking for genuine products from Indonesia, the products we sell are export quality products, with a long process to get the best results we sell quality products for you.',
            'content_3' => 'Azza INDONESIA SUPPLIER is committed to providing the best service in our customer satisfaction, We serve customers from all over the world.',
            'image' => 'img/products/products_7.png',
        ]);
    }
}
