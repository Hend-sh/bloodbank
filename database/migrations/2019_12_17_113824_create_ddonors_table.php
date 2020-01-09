<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDdonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ddonors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name");
            $table->integer("age");
            $table->string('bloodtype');
            $table->integer("phone_number");
            $table->string('email')->unique();
            $table->string('city');
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
        Schema::dropIfExists('ddonors');
    }
}
