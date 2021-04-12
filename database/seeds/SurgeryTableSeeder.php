<?php

use App\Backend\Surgery;
use Illuminate\Database\Seeder;

class SurgeryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		{
			$faker=Faker\Factory::create();
			$data=['Major',
				'Minor',
				' Blood Transfusion'];

			foreach (range(1,200) as $index);
			{
				foreach ($data as $surgery)
				{
					Surgery::create([
						'surgery_name'=>$surgery,
						'status'=>'1'
					]);
				}
			}
		}
    }
}
