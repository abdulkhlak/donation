<?php

namespace App\Http\Controllers\Backend;

use App\Backend\Diseases;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DiseasesController extends Controller
{
	public function view()
	{

		$data = Diseases::get();
		return view('layouts.admin.diseases.diseases_view', compact('data'));

	}
	public function add()
	{
		return view('layouts.admin.diseases.diseases_add');
	}
	public function store(Request $request)
	{
		$this->validate($request, [
			'diseases_name' =>'required|unique:diseases,diseases_name'
		]);
		$diseases = null;
		try {

			$diseases = Diseases::create([
				'diseases_name' => $request->diseases_name,
				'status' => $request->status,

			]);


		} catch (Exception $exception) {
			$diseases = false;
		}
		if ($diseases == true) {
			return redirect()->route('diseases_view')->with('success', 'Successfully Created');
		} else {
			return back()->with('error', 'Oops! Unable to create a diseases ');
		}

	}
	public function edit($id)
	{
		$id = base64_decode($id);
		$diseases_edit = Diseases::find($id);
		return view('layouts.admin.diseases.diseases_edit', compact('diseases_edit'));
	}
	public function update(Request $request, $id)
	{

		$diseases = Diseases::find($id);
		$success = null;
		try {
			$diseases->update([
				'diseases_name' => $request->diseases_name,
				'status' => $request->status,

			]);

			$success = true;
		} catch (Exception $exception) {
			$success = false;
		}
		if ($success === true) {
			return redirect()->route('diseases_view')->with('success', 'successfully update !');
		} else {
			return back()->with('error', 'Oops! Unable to update a diseases ');
		}


	}
	public function delete($id)
	{
		$id = base64_decode($id);

		$diseases = Diseases::find($id);
		$diseases->delete();
		return redirect()->route('diseases_view')->with('success', 'delete successfully');
	}
}
