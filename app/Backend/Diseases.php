<?php

namespace App\Backend;

use Illuminate\Database\Eloquent\Model;

class Diseases extends Model
{
	protected $fillable = [
		'diseases_name','status'
	];
}
