<?php

namespace App\Http\Controllers\Backend;

use App\Backend\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
	public function view()
	{
		$sliders = Slider::get();
		return view('layouts.admin.Slider.sliders_view', compact('sliders'));

	}
	public function add()
	{
		return view('layouts.admin.Slider.sliders_add');
	}
	public function store(Request $request)
	{
		$this->validate($request, [
			'image' => ['required'],
		]);
		$sliders = null;
		try {

			$sliders = Slider::create([
				'title' => $request->title,
				'sub_title' => $request->sub_title,
				'btn_name' => $request->btn_name,
				'call' => $request->call,
				'url' => $request->url,
				'status' => $request->status,

			]);


			if ($request->file('image')) {
				$file = $request->file('image');
				//	@unlink(public_path('upload/store_managment/products/' . $products->featured_image));
				$filename = date('YmdHi') . $file->getClientOriginalName();
				$file->move(public_path('images/slider_images'), $filename);
				$sliders->image = $filename;
			}

//return $sliders;
			$sliders->save();



		} catch (Exception $exception) {
			$sliders = false;
		}
		if ($sliders == true) {
			return redirect()->route('sliders_view')->with('success', 'Successfully Created');
		} else {
			return back()->with('error', 'Oops! Unable to create a slider ');
		}

	}
	public function edit($id)
	{
		$id = base64_decode($id);
		$slider_edit = Slider::find($id);
		return view('layouts.admin.Slider.sliders_edit', compact('slider_edit'));
	}
	public function update(Request $request, $id)
	{

		$sliders = Slider::find($id);
		$success = null;
		try {
			$sliders->update([
				'title' => $request->title,
				'sub_title' => $request->sub_title,
				'btn_name' => $request->btn_name,
				'call' => $request->call,
				'url' => $request->url,
				'status' => $request->status,

			]);
			if ($request->file('image')) {
				$file = $request->file('image');
				@unlink(public_path('images/slider_images/'. $sliders->image));
				$filename = date('YmdHi') . $file->getClientOriginalName();
				$file->move(public_path('images/slider_images'), $filename);
				$sliders->image = $filename;
			}
			$sliders->save();


			$success = true;
		} catch (Exception $exception) {
			$success = false;
		}
		if ($success === true) {
			return redirect()->route('sliders_view')->with('success', 'Slider has been successfully update !');
		} else {
			return back()->with('error', 'Oops! Unable to update a Slider ');
		}


	}
	public function delete($id)
	{
		$id = base64_decode($id);

		$slider = Slider::find($id);
		$slider->delete();
		return redirect()->route('sliders_view')->with('success', ' slider has been delete successfully');
	}
}
