<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		Student::create(['student_fname' => 'Dora', 'student_lname' => 'Explorer', 'image_name' => 'dora', 'email' => 'test@example.com',
						 'dob' => '01/01/2000', 'school_id'=> 1,'quiz_id' => 1, 'mentor_id' => 1]);
    }
}
