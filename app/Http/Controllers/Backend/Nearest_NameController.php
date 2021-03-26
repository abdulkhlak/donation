<?php

namespace App\Http\Controllers\Backend;

use App\Backend\District;
use App\Backend\Nearest_name;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Nearest_NameController extends Controller
{
	public function view()
	{
		$nearests = Nearest_name::with('district')->orderBy('id','desc')->get();
		return view('layouts.admin.nearest.nearest_view', compact('nearests'));

	}

	public function add()
	{
		$districts=District::all();
		return view('layouts.admin.nearest.nearest_add',compact('districts'));
	}
	public function store(Request $request)
	{
		$this->validate($request, [
			'nearest_name' =>'required|unique:nearest_names,nearest_name',
			 'district_id' =>'required|not_in:0'
		]);
		$nearest = null;
		try {

			$nearest = Nearest_name::create([
				'nearest_name' => $request->nearest_name,
				'district_id' => $request->district_id,
				'status' => $request->status,

			]);

			$nearest->save();



		} catch (Exception $exception) {
			$nearest = false;
		}
		if ($nearest == true) {
			return redirect()->route('nearest_view')->with('success', 'Successfully Created');
		} else {
			return back()->with('error', 'Oops! Unable to create a nearest ');
		}

	}
}
