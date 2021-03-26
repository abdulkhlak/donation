<?php

namespace App\Http\Controllers\Backend;

use App\Backend\blood_group;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class blood_groupController extends Controller
{
	public function view()
	{
		$blood_groups = blood_group::get();
		return view('layouts.admin.blood_group.blood_group_view', compact('blood_groups'));

	}

	public function add()
	{
		return view('layouts.admin.blood_group.blood_group_add');
	}
	public function store(Request $request)
	{
		$this->validate($request, [
			'blood_group_name' =>'required|unique:nearest_names,nearest_name'
		]);
		$blood_group = null;
		try {

			$blood_group = blood_group::create([
				'blood_group_name' => $request->blood_group_name,
				'status' => $request->status,

			]);

			$blood_group->save();



		} catch (Exception $exception) {
			$blood_group = false;
		}
		if ($blood_group == true) {
			return redirect()->route('blood_group_view')->with('success', 'Successfully Created');
		} else {
			return back()->with('error', 'Oops! Unable to create a blood group ');
		}

	}

	public function edit($id)
	{
		$id = base64_decode($id);
		$blood_group_edit = blood_group::find($id);
		return view('layouts.admin.blood_group.blood_group_edit', compact('blood_group_edit'));
	}
	public function update(Request $request, $id)
	{

		$blood_groups = blood_group::find($id);
		$success = null;
		try {
			$blood_groups->update([
				'blood_group_name' => $request->blood_group_name,
				'status' => $request->status,

			]);
			$blood_groups->save();


			$success = true;
		} catch (Exception $exception) {
			$success = false;
		}
		if ($success === true) {
			return redirect()->route('blood_group_view')->with('success', 'blood group has been successfully update !');
		} else {
			return back()->with('error', 'Oops! Unable to update a blood group ');
		}


	}
	public function delete($id)
	{
		$id = base64_decode($id);

		$bloodgroup = blood_group::find($id);
		$bloodgroup->delete();
		return redirect()->route('blood_group_view')->with('success', ' blood group has been delete successfully');
	}
}
