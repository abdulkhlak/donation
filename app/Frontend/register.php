<?php

namespace App\Frontend;

use Illuminate\Database\Eloquent\Model;

class register extends Model
{
	protected $fillable = [
		'name',
		'father_name',
		'mother_name',
		'email',
		'mobile',
		'address',
		'district_id',
		'nearest_id',
		'blood_group_id',
		'diseases_id',
		'surgery_id',
		'weight',
		'gender',
		'married_Status',
		'date_of_birth',
		'blood_before',
		'last_time_donated',
		'pregnant',
		'abortion',
		'child_one_year_old',
		'other_allergies',
		'image',
		'donor',
		'accepted',
		'password'
	];
}
