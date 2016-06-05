<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
	protected $fillable = [

		'student_fname',
		'student_lname',
		'image_name',
		'email',
		'dob',
		'school_id',
		'quiz_id',
		'mentor_id',
	];

	public function school()
	{
		return $this->belongsTo('App\School');
	}

	public function quiz()
	{
		return $this->belongsTo('App\Quiz');
	}

	public function mentor()
	{
		return $this->belongsTo('App\Mentor');
	}

}
