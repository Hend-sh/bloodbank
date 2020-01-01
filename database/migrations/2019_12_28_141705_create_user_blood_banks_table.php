<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserBloodBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_blood_banks', function (Blueprint $table) 
        {
            $table->bigIncrements('blood_id');
            $table->string('blood_bank_name');
            $table->boolean('active')->default(0); 
            $table->integer('city_number');
            $table->string('location');           
            $table->integer('user_id');            
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
        Schema::dropIfExists('user_blood_banks');
    }
}
