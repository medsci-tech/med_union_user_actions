<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('application_hospitals', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('hospital_id')->comment('医院id');
            $table->unsignedInteger('application_id')->comment('项目id');
            $table->timestamps();

            $table->foreign('hospital_id')->references('id')->on('hospitals');
            $table->foreign('application_id')->references('id')->on('applications');
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
        Schema::table('application_hospitals', function (Blueprint $table) {
            $table->dropForeign('application_hospitals_hospital_id_foreign');
            $table->dropForeign('application_hospitals_application_id_foreign');
        });
        Schema::dropIfExists('application_hospitals');
    }
}
