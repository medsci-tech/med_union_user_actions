<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('hospitals', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name', 60)->unique()->comment('医院名字');
            $table->string('type')->nullable()->comment('医院类型');

            $table->string('province')->nullable()->comment('省');
            $table->string('city')->nullable()->comment('市');
            $table->string('area')->nullable()->comment('区');
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
        Schema::drop('hospitals');
    }
}
