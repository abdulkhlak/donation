<?php

use App\Backend\Diseases;
use Illuminate\Database\Seeder;

class DiseasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
	{
		$faker=Faker\Factory::create();
		$data=['Heart Disease',
			'Cancer/ Malignant Disease',
			'Abnormal bleeding tendency',
			'Allergic Disease',
			'Sexually Trans. Diseases',
			'Typhoid (last 1 yr.)',
			'Kidney Disease',
			'Lung Disease',
			'Malaria (6 months)',
			'Fainting Spells)',
			'Tuberculosis',
			'Epilepsy',
			'Jaundice (last 1 yr.)',
			'Hepatitis B/C'];

		foreach (range(1,200) as $index);
		{
			foreach ($data as $diseases)
			{
				Diseases::create([
					'diseases_name'=>$diseases,
					'status'=>'1'
				]);
			}
		}
	}
}
