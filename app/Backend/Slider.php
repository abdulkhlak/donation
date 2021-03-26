<?php

namespace App\Backend;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
	protected $fillable = [
		'title', 'sub_title','image','call', 'btn_name', 'url','status'
	];
}
