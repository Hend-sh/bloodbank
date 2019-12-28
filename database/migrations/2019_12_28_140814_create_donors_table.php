<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('Nationality');
            $table->string('gender');
            $table->string('dateBirth');
            $table->string('bloodType');
            $table->foreign('cityNum')->references('city_Num')->on('cities');
            $table->string('Location');
            $table->string('HealthStatus');
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
        Schema::dropIfExists('donors');
    }
}
