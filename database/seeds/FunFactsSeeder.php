<?php

use Illuminate\Database\Seeder;

class FunFactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\FunFacts::create([ 'icon' => 'far fa-smile', 'title' => 'Happy Clients', 'number' => '1,024', 'orderBy' => 1,]);
        App\Models\FunFacts::create([ 'icon' => 'far fa-clock', 'title' => 'Working Hours', 'number' => '6,256', 'orderBy' => 2,]);
        App\Models\FunFacts::create([ 'icon' => 'fas fa-trophy', 'title' => 'Awards Won', 'number' => '21', 'orderBy' => 3,]);
        App\Models\FunFacts::create([ 'icon' => 'far fa-coffee', 'title' => 'Coffee Consumed', 'number' => '20,000', 'orderBy' => 4,]);
    }
}
