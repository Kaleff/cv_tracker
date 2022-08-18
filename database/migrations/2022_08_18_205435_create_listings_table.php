<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvMainInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv_main_info', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->email('email');
            $table->integer('phone');
            $table->string('location');
            $table->string('address');
            $table->string('pastindex');
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
        Schema::dropIfExists('cv_main_info');
    }
}
