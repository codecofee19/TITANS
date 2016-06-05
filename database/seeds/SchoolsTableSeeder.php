<?php

use Illuminate\Database\Seeder;
use App\School;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        School::create(['school_name' => 'John B Connally High School', 'school_address' => '13212 N Lamar Blvd Austin TX 78753',
        'school_region'=>'North', 'school_rating' => 'D-']);
    }
}
