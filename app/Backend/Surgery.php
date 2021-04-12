<?php

namespace App\Backend;

use Illuminate\Database\Eloquent\Model;

class Surgery extends Model
{
	protected $fillable = [
		'surgery_name','status'
	];
}
