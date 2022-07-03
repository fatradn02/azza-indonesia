<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $users = [
            [
                'name' => 'Biwo Wijaya',
                'image' => "/img/user/user_1.jpg",
                'role' => "user",
                'work' => "Founder",
                "instagram" => "https://www.instagram.com/bimowijaya13/",
                "password" => "bimo54321"
            ],
            [
                'name' => 'Jhoni Iskandar',
                'image' => "/img/user/user_2.jpg",
                'role' => "user",
                'work' => "Co-Founder",
                "instagram" => "https://www.instagram.com/jhoniiskandar93/",
                "password" => "jhoni54321"


            ],
            [
                'name' => "Fatra Dinata",
                'image' => "/img/user/user_3.jpg",
                'role' => "admin",
                'work' => "Co-Founder",
                "instagram" => "https://www.instagram.com/siola_boy/",
                "password" => "fatra18052002"

            ],

        ];
        foreach ($users as $user) {
            User::create([
                'name' => $user['name'],
                'image' => $user['image'],
                'role' => $user['role'],
                'work' => $user['work'],
                'instagram' => $user['instagram'],
                'password' => $user['password'],
            ]);
        }
    }
}
