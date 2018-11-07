<?php

use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Skills::create([ 'type' => 'Design Skills', 'title' => 'Web Design', 'persentasie' => 'skill-1', 'orderBy' => 1,]);
        App\Models\Skills::create([ 'type' => 'Design Skills', 'title' => 'Graphic Design', 'persentasie' => 'skill-2', 'orderBy' => 2,]);
        App\Models\Skills::create([ 'type' => 'Design Skills', 'title' => 'Print Design', 'persentasie' => 'skill-3', 'orderBy' => 3,]);

        App\Models\Skills::create([ 'type' => 'Coding Skills', 'title' => 'HML5', 'persentasie' => 'skill-4', 'orderBy' => 4,]);
        App\Models\Skills::create([ 'type' => 'Coding Skills', 'title' => 'CSS3', 'persentasie' => 'skill-5', 'orderBy' => 5,]);
        App\Models\Skills::create([ 'type' => 'Coding Skills', 'title' => 'jQuery', 'persentasie' => 'skill-6', 'orderBy' => 6,]);
        App\Models\Skills::create([ 'type' => 'Coding Skills', 'title' => 'Wordpress', 'persentasie' => 'skill-7', 'orderBy' => 7,]);
        App\Models\Skills::create([ 'type' => 'Coding Skills', 'title' => 'PHP', 'persentasie' => 'skill-8', 'orderBy' => 8,]);
    }
}
