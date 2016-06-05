<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //
	protected $fillable = [

		'school_name',
		'school_address',
		'school_region',
		'school_rating',
		'removed_flag',

	];

}
