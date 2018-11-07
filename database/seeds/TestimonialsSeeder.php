<?php

use Illuminate\Database\Seeder;

class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Testimonials::create([ 'author' => 'Maria Richardson', 'firm' => 'Lindsley is Lumber', 'image' => 'testimonial_photo_1.jpg', 'description' => '"Phasellus eu nunc tincidunt, ultricies elit vitae, pretium eros.Sed sed ipsum sed massa."', 'orderBy' => 1 ]);
        App\Models\Testimonials::create([ 'author' => 'John Doe', 'firm' => 'Apple Inc.', 'image' => 'testimonial_photo_2.jpg', 'description' => '"Vivamus porta dapibus tristique. Suspendisse et arcu eget nisi convallis eleifend nec ac lorem."', 'orderBy' => 2 ]);
        App\Models\Testimonials::create([ 'author' => 'George McQueen', 'firm' => 'Harmony House', 'image' => 'testimonial_photo_3.jpg', 'description' => '"Aliquam congue auctor lectus sed fermentum. Nulla ultricies tellus quis sapien lacinia egestas."', 'orderBy' => 3 ]);
    }
}
