<?php

namespace App\Http\Controllers\Backend;

use App\Backend\Surgery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SurgeryController extends Controller
{

	public function view()
	{

		$data = Surgery::get();
		return view('layouts.admin.surgery.surgery_view', compact('data'));

	}
	public function add()
	{
		return view('layouts.admin.surgery.surgery_add');
	}
	public function store(Request $request)
	{
		$this->validate($request, [
			'surgery_name' =>'required|unique:surgeries,surgery_name'
		]);
		$surgery = null;
		try {

			$surgery = Surgery::create([
				'surgery_name' => $request->surgery_name,
				'status' => $request->status,

			]);


		} catch (Exception $exception) {
			$surgery = false;
		}
		if ($surgery == true) {
			return redirect()->route('surgery_view')->with('success', 'Successfully Created');
		} else {
			return back()->with('error', 'Oops! Unable to create a surgery ');
		}

	}
	public function edit($id)
	{
		$id = base64_decode($id);
		$surgery_edit = Surgery::find($id);
		return view('layouts.admin.surgery.surgery_edit', compact('surgery_edit'));
	}
	public function update(Request $request, $id)
	{

		$surgery = Surgery::find($id);
		$success = null;
		try {
			$surgery->update([
				'surgery_name' => $request->surgery_name,
				'status' => $request->status,

			]);

			$success = true;
		} catch (Exception $exception) {
			$success = false;
		}
		if ($success === true) {
			return redirect()->route('surgery_view')->with('success', 'successfully update !');
		} else {
			return back()->with('error', 'Oops! Unable to update a surgery ');
		}


	}
	public function delete($id)
	{
		$id = base64_decode($id);

		$surgery = Surgery::find($id);
		$surgery->delete();
		return redirect()->route('surgery_view')->with('success', 'delete successfully');
	}
}
