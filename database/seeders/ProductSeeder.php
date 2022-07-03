<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();
        $products = [
            [
                'title' => 'Coconut Husked',
                'content' => 'We sell coconut husked with various grades, our products are almost entirely light brown, semi husked coconut is a practical import process which does not lose all its economic value, this is our superior commodity from the island of Sumatra, we sell it at the best price for you',
                'image' => '/img/products/products_4.jpg',
            ],
            [
                'title' => 'Betel Nut',
                'content' => 'Areca nut is a type of monocotyledonous plant belonging to palms. Areca nut belongs to the Arecaceae family in the Arecales order. This tree is one of the plants with high economic value and potential. Plants that have straight and slender stems have many benefits and are commonly known as medicinal plants.                ',
                'image' => '/img/products/products_1.jpg',
            ],

        ];
        foreach ($products as $product) {
            Product::create([
                'title' => $product['title'],
                'content' => $product['content'],
                'image' => $product['image'],
            ]);
        }
    }
}
