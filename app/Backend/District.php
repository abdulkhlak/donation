<?php

namespace App\Backend;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
	protected $fillable = [
		'district_name','status'
	];
	public function city()
	{
		return $this->hasMany(Nearest_name::class,'id','id');
	}
}
