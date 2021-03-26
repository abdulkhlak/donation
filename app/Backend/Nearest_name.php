<?php

namespace App\Backend;

use Illuminate\Database\Eloquent\Model;

class Nearest_name extends Model
{
	protected $fillable = [
		'district_id', 'nearest_name','status'
	];
	public function district()
	{
		return $this->belongsTo(District::class,'district_id','id');
	}
}
