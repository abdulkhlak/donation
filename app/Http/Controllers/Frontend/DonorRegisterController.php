<?php

namespace App\Http\Controllers\Frontend;

use App\Backend\blood_group;
use App\Backend\Diseases;
use App\Backend\District;
use App\Backend\Nearest_name;
use App\Backend\Surgery;
use App\Frontend\register;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class DonorRegisterController extends Controller
{
    public function register()
	{
		$data=Diseases::get();
		$_data= Surgery::get();
		$bloods = blood_group::where('status','1')->get();
		$districts = District::with('city')->orderBy('id','desc')->get();

		return view('frontend.register.register',compact('districts','bloods','data','_data'));
	}
	public function findCityWithDistrictID($id)
	{
		$city = Nearest_name::where('district_id',$id)->get();
		return response()->json($city);
	}

	public function store(Request $request)
	{

		$data = null;
		try {

			$data = register::create([
				'name' => $request->name,
				'father_name' => $request->father_name,
				'mother_name' => $request->mother_name,
				'address' => $request->address,
				'district_id' => $request->district_id,
				'nearest_id' => $request->nearest_id,
				'blood_group_id' => $request->blood_group_id,
				//'diseases_id' => $request->diseases_id,
				$data['diseases_id'] = $request->diseases_id('diseases_id'),
				'surgery_id' => $request->surgery_id,
				'weight' => $request->weight,
				'gender' => $request->gender,
				'married_Status' => $request->married_Status,
				'date_of_birth' => $request->date_of_birth,
				'blood_before' => $request->blood_before,
				'last_time_donated' => $request->last_time_donated,
				'pregnant' => $request->pregnant,
				'abortion' => $request->abortion,
				'child_one_year_old' => $request->child_one_year_old,
				'other_allergies' => $request->other_allergies,
				'donor' => $request->donor,
				'accepted' => $request->accepted,
				'email' => $request->email,
				'mobile' => $request->mobile,
				'password' => Hash::make($request->password),

			]);
dd($data);


			if ($request->file('image')) {
				$file = $request->file('image');
				//	@unlink(public_path('upload/store_managment/products/' . $products->featured_image));
				$filename = date('YmdHi') . $file->getClientOriginalName();
				$file->move(public_path('images/register_images'), $filename);
				$data->image = $filename;
			}




		} catch (Exception $exception) {
			$data = false;
		}
		if ($data == true) {

	return redirect()->route('register_view')->with('success', 'Successfully Created');
		} else {
			return back()->with('error', 'Oops! Unable to create a Register ');
		}

	}
}
