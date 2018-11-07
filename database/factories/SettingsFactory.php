<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Settings::class, function (Faker $faker) {
     return [
        'title' => 'Bootstrap Business profile Site Templates',
        'description' => 'Praesent ut tortor consectetur, semper sapien non, lacinia augue. Aenean arcu libero, facilisis et nisi non, tempus faucibus tortor. Mauris vel nulla aliquam, pellentesque enim ac, faucibus tortor. Nulla odio nibh, cursus sit amet urna id, dignissim euismod augue. <br><br> Duis sollicitudin, libero porttitor rutrum ultrices, turpis lorem fermentum justo, quis ornare augue tortor non est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.',
        'full_name' => 'Mohammed A. Alzard',
        'profile_image' => 'profile-image.png',
        'age' => '22',
        'residence' => 'PS',
        'address' => 'Gaza',
        'email' => 'dev.alzard@gmail.com',
        'phone' => '+972597733890',
        'skype' => 'mohammed.alzard',
        'desc_contact' => 'Sed eleifend sed nibh nec fringilla. Donec eu cursus sem, vitae tristique ante. Cras pretium rutrum egestas. Integer ultrices libero sed justo vehicula, eget tincidunt tortor tempus.',
        'yearsExperience' => '3 Years of Experience',
        'cv' => '#',
        'created_at' => '22-3-1996'
    ];
});
