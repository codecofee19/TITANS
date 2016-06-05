<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    //
	protected $fillable = [

		'question_one',
		'question_two',
		'question_three',
		'question_four',
		'question_five',
		'question_six',
		'question_seven',
		'question_eight',
	];
}
