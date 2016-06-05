<?php

use Illuminate\Database\Seeder;
use App\Mentor;

class MentorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mentor::create(['mentor_fname' => 'Megan', 'mentor_lname' => 'Smith', 'image_name' => 'msmith', 'email' => 'test@example.com', 'dob' => '10/01/1964', 'zip_code' => '78727', 'student_id' => 1, 'status' => '2', 'skills' => 'backend development', 'job_title' => 'Chief Technology Officer of the United States']);
    }
}
