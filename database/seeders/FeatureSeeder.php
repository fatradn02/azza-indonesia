<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feature::truncate();
        $features = [
            [
                'title' => 'Integrity',
                'content' => "We are integrity, we strive to keep our promises, and act fairly and with respect, integrity is our asset, that's how our products will be known to people. "
            ],
            [
                'title' => 'Commitment',
                'content' => "Commitment is us, which means we are committed to providing the best service for customers all the time."
            ],
            [
                'title' => 'Quality',
                'content' => "Quality is important in marketing products, and we try to provide the best product quality, we have carried out periodic checks to ensure the products we sell meet customer expectations."
            ],
            [
                'title' => 'Innovation',
                'content' => "Us to create something new, and design our products to have a high appeal in the market and give satisfaction to our customers."
            ]
        ];
        foreach ($features as $feature) {
            Feature::create([
                'title' => $feature['title'],
                'content' => $feature['content'],
            ]);
        }
    }
}
