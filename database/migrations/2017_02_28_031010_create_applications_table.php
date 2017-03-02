<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_en', 30)->unique()->comment('项目名');
            $table->string('name_ch', 30)->unique()->comment('项目名');

            $table->dateTime("start_time")->comment('项目开始时间');
            $table->dateTime("end_time")->comment('项目结束时间');
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
        Schema::drop('applications');
    }
}
