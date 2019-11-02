<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InfoUniversityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('websit');
            $table->string('phone_number');
            $table->string('university_email');
            $table->string('street');
            $table->string('direction');
            $table->string('city');
            $table->unsignedBigInteger('university_id');
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
        //
    }
}
