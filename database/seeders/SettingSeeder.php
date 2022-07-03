<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::truncate();
        Setting::create([
            'instagram' => "https://www.instagram.com/azzaindonesia.ie/",
            'facebook' => "https://www.facebook.com/profile.php?id=100082398920157",
            'linkedin' => "https://www.linkedin.com/in/azza-indonesia-485286243/",
            'youtube' => "https://www.youtube.com/channel/UCq3haQR8CLd7kLAKBHjML6A",
            'address' => "Jl. HM Yusuf Nasri RT. 21 Kel. Wijaya Pura Kec. Jambi Selatan",
            'email' => "azzaindonesiasupplier@gmail.com",
            'phone_number' => "+6282269687251",
            'logo' => "AZZA INDONESIA SUPPLIER",
            'tagline_1' => "The best from the others",
            'tagline_2' => "We are the solution for you in looking for Indonesian produce",
            'tagline_3' => "We are a company engaged in managing natural resources from Indonesia, we are aware of the environment of our area which has a lot of natural resources to process, PT AZZA INDONESIA SUPPLIER is here as a forum to manage Indonesia's natural resources, we hope to help farmers and prosper them"

        ]);
    }
}
