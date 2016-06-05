<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMentorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentors', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('mentor_fname');
		    $table->string('mentor_lname');
		    $table->string('image_name');
		    $table->string('email');
		    $table->date('dob');
		    $table->integer('student_id')->nullable();
            $table->string('zip_code');
            $table->string('job_title');
            $table->string('skills');
		    $table->string('status')->default(0);
            $table->integer('removed_flag')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mentors');
    }
}
