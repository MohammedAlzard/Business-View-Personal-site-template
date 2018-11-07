<?php

use Illuminate\Database\Seeder;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Clients::create([ 'image' => 'client_1.png', 'title' => '', 'orderBy' => 1 ]);
        App\Models\Clients::create([ 'image' => 'client_2.png', 'title' => '', 'orderBy' => 2 ]);
        App\Models\Clients::create([ 'image' => 'client_3.png', 'title' => '', 'orderBy' => 3 ]);
        App\Models\Clients::create([ 'image' => 'client_4.png', 'title' => '', 'orderBy' => 4 ]);
        App\Models\Clients::create([ 'image' => 'client_5.png', 'title' => '', 'orderBy' => 5 ]);
        App\Models\Clients::create([ 'image' => 'client_6.png', 'title' => '', 'orderBy' => 6 ]);
    }
}
