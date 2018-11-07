<?php

use Illuminate\Database\Seeder;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\SocialMedia::create([ 'icon' => 'fab fa-facebook', 'link' => '#', ]);
        App\Models\SocialMedia::create([ 'icon' => 'fab fa-twitter', 'link' => '#', ]);
        App\Models\SocialMedia::create([ 'icon' => 'fab fa-linkedin-in', 'link' => '#', ]);
        App\Models\SocialMedia::create([ 'icon' => 'fab fa-google-plus-g', 'link' => '#', ]);
        App\Models\SocialMedia::create([ 'icon' => 'fab fa-whatsapp', 'link' => '#', ]);
    }
}
