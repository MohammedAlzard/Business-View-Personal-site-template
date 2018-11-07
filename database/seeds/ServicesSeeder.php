<?php

use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Services::create([ 'image' => 'web_design_icon.png', 'title' => 'Web Design', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.', 'orderBy' => 1 ]);
        App\Models\Services::create([ 'image' => 'photography_icon.png', 'title' => 'Photography', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.', 'orderBy' => 2 ]);
        App\Models\Services::create([ 'image' => 'creativity_icon.png', 'title' => 'Creativity', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.', 'orderBy' => 3 ]);
        App\Models\Services::create([ 'image' => 'advetising_icon.png', 'title' => 'Advertising', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.', 'orderBy' => 4 ]);
    }
}
