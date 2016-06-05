<?php

use Illuminate\Database\Seeder;
use App\Quiz;

class QuizzesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quiz::create([]);
    }
}
