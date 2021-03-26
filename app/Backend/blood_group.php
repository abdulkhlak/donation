<?php

namespace App\Backend;

use Illuminate\Database\Eloquent\Model;

class blood_group extends Model
{
	protected $fillable = [
		'blood_group_name','status'
	];
}
