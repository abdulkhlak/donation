<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name'=>'admin',
			'email'=>'admin@tsb.com',
			'password'=>Hash::make('12345678')
		]);
    }
}
