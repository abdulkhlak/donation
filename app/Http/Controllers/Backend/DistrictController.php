<?php

namespace App\Http\Controllers\Backend;

use App\Backend\District;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DistrictController extends Controller
{
	public function view()
	{
		$districts = District::get();
		return view('layouts.admin.district.district_view', compact('districts'));

	}
	public function add()
	{
		return view('layouts.admin.district.district_add');
	}
	public function store(Request $request)
	{
		$this->validate($request, [
			'district_name' =>'required|unique:districts,district_name'
		]);
		$districts = null;
		try {

			$districts = District::create([
				'district_name' => $request->district_name,
				'status' => $request->status,

			]);

			$districts->save();



		} catch (Exception $exception) {
			$districts = false;
		}
		if ($districts == true) {
			return redirect()->route('district_view')->with('success', 'Successfully Created');
		} else {
			return back()->with('error', 'Oops! Unable to create a district ');
		}

	}
	public function edit($id)
	{
		$id = base64_decode($id);
		$district_edit = District::find($id);
		return view('layouts.admin.district.district_edit', compact('district_edit'));
	}
	public function update(Request $request, $id)
	{

		$districts = District::find($id);
		$success = null;
		try {
			$districts->update([
				'district_name' => $request->district_name,
				'status' => $request->status,

			]);
			$districts->save();


			$success = true;
		} catch (Exception $exception) {
			$success = false;
		}
		if ($success === true) {
			return redirect()->route('district_view')->with('success', 'District has been successfully update !');
		} else {
			return back()->with('error', 'Oops! Unable to update a district ');
		}


	}
	public function delete($id)
	{
		$id = base64_decode($id);

		$district = District::find($id);
		$district->delete();
		return redirect()->route('district_view')->with('success', ' slider has been delete successfully');
	}
}
