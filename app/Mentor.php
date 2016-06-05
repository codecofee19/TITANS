<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    //
	protected $fillable = [

		'mentor_fname',
		'mentor_lname',
		'image_name',
		'email',
		'dob',
		'zip_code',
		'student_id',
		'status',
		'skills',
		'job_title',
	];

	public function students()
	{
		return $this->hasMany('App\Student');
	}
}
