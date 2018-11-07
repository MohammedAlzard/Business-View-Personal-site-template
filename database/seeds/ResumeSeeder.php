<?php

use Illuminate\Database\Seeder;

class ResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Resumes::create([ 'datetime' => '2010', 'type' => 'Education', 'title' => 'Specialization Course', 'description' => 'Specialization CourseSpecialization CourseSpecialization CourseSpecialization Course', 'orderBy' => 1,]);
        App\Models\Resumes::create([ 'datetime' => '2009', 'type' => 'Education', 'title' => 'Specialization Course', 'description' => 'Specialization CourseSpecialization CourseSpecialization Course', 'orderBy' => 2,]);
        App\Models\Resumes::create([ 'datetime' => '2008', 'type' => 'Education', 'title' => 'Specialization Course', 'description' => 'Specialization CourseSpecialization Course', 'orderBy' => 3,]);

        App\Models\Resumes::create([ 'datetime' => '2012', 'type' => 'Experience', 'title' => 'Frontend-developer', 'description' => 'Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.', 'orderBy' => 4,]);
        App\Models\Resumes::create([ 'datetime' => '1011', 'type' => 'Experience', 'title' => 'Web Designer', 'description' => 'Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.', 'orderBy' => 5,]);
        App\Models\Resumes::create([ 'datetime' => '2010', 'type' => 'Experience', 'title' => 'Graphic Designer', 'description' => 'Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.', 'orderBy' => 6,]);
    }
}
