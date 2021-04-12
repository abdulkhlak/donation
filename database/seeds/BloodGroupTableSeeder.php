<?php

use App\Backend\blood_group;
use Illuminate\Database\Seeder;

class BloodGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
	{
		$faker=Faker\Factory::create();
		$data=
			['(A+)',
			'(A-)',
			'(B+)',
			'(B-)',
			'(O+)',
			'(O-)',
			'(AB+)',
			'(AB-)'];

		foreach (range(1,200) as $index);
		{
			foreach ($data as $blood)
			{
				blood_group::create([
					'blood_group_name'=>$blood,
					'status'=>'1'
				]);
			}
		}
	}
}
