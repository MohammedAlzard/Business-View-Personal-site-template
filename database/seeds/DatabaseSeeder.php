<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
                UserSeeder::class,
                SettingsSeeder::class,
                SocialMediaSeeder::class,
                ServicesSeeder::class,
                ClientsSeeder::class,
                TestimonialsSeeder::class,
                FunFactsSeeder::class,
                ResumeSeeder::class,
                SkillsSeeder::class,
            ]);
    }
}
