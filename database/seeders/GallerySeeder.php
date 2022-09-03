<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gallery::truncate();
        $galleries = [
            [
                'image' => '/img/gallery/index.jpeg',
            ],
            [
                'image' => '/img/gallery/index2.jpeg',
            ],
            [
                'image' => '/img/gallery/index3.jpeg',
            ],
            [
                'image' => '/img/gallery/index4.jpeg',
            ],
            [
                'image' => '/img/gallery/index5.jpeg',
            ],
            [
                'image' => '/img/gallery/index6.jpeg',
            ],
            [
                'image' => '/img/gallery/index7.jpeg',
            ],
            [
                'image' => '/img/gallery/index8.jpeg',
            ],
            [
                'image' => '/img/gallery/index9.jpeg',
            ],
            [
                'image' => '/img/gallery/index10.jpeg',
            ],

        ];

        foreach ($galleries as $gallery) {
            Gallery::create([
                'image' => $gallery['image'],

            ]);
        }
    }
}
