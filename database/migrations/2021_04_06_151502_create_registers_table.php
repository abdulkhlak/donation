<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('name');
			$table->string('father_name');
			$table->string('mother_name');
			$table->string('email')->unique();
			$table->string('mobile')->unique();
			$table->longText('address');
			$table->string('district_id');
			$table->string('nearest_id');
			$table->string('blood_group_id');
			$table->string('diseases_id');
			$table->string('surgery_id');
			$table->integer('weight');
			$table->string('gender');
			$table->string('married_Status');
			$table->date('date_of_birth');
			$table->enum('blood_before',['1','0'])->default('0');
			$table->date('last_time_donated')->nullable();
			$table->string('pregnant')->nullable();
			$table->string('abortion')->nullable();
			$table->string('child_one_year_old')->nullable();
			$table->longText('other_allergies')->nullable();
			$table->string('image');
			$table->enum('donor',['1','0'])->default('0');
			$table->string('accepted');
			$table->string('password');
//			$table->enum('status',['1','0'])->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registers');
    }
}
