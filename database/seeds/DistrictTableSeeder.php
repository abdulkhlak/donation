<?php

use App\Backend\District;
use Illuminate\Database\Seeder;

class DistrictTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker\Factory::create();
        $districts=['Jamalpur','Mymensingh','Netrokona','Sherpur','Bogra',
			'Jaipurhat','Natore','Nawabganj','Pabna','Rajshahi','Sirajganj',
			'Dinajpur','Gaibandha','Kurigram','Lalmonirhat','Nilphamari','Panchagarh',
			'Rangpur','Thakurgaon','Habiganj','Moulvibazar','Sunamganj','Sylhet','Bagerhat',
			'Bandarban','Barguna','Barisal','Bhola','Brahmanbaria','Chandpur','Chittagong',
			'Chuadanga','Comilla','CoxsBazar','Dhaka','Faridpur','Feni','Gazipur','Gopalganj',
			'Jessore','Jhalakati','Jhenaidah','Khagrachari','Khulna','Kishoreganj',
			'Kushtia','Lakshmipur','Madaripur','Magura','Manikganj','Meherpur','Munshiganj',
			'Naogaon','Narail','Narsingdi','Noakhali','Patuakhali','Pirojpur','Rajbari','Satkhira','Shariatpur','Tangail'];

        foreach (range(1,200) as $index);
		{
foreach ($districts as $district)
{
	District::create([
		'district_name'=>$district,
		'status'=>'1'
	]);
}
		}
    }
}
