<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(DistrictTableSeeder::class);
        $this->call(DiseasesTableSeeder::class);
        $this->call(BloodGroupTableSeeder::class);
        $this->call(SurgeryTableSeeder::class);

    }
}
