<?php

namespace Database\Seeders;

use App\Models\Sponsor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SponsorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sponsor::truncate();
        $sponsors = [
            [
                'image' => '/img/sponsor/sponsor.png',
                'title' => "Dinas Pertanian"
            ],
            [
                'image' => '/img/sponsor/sponsor_4.png',
                'title' => "Disperindag"
            ],
            [
                'image' => '/img/sponsor/sponsor_3.png',
                'title' => "Bea Cukai"
            ],

        ];
        foreach ($sponsors as $sponsor) {
            Sponsor::create([
                'image' => $sponsor['image'],
                'title' => $sponsor['title'],
            ]);
        }
    }
}
