<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationHospitalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('application_hospital', function (Blueprint $table) {
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
        Schema::table('application_hospital', function (Blueprint $table) {
            $table->dropForeign('application_hospital_hospital_id_foreign');
            $table->dropForeign('application_hospital_application_id_foreign');
        });
        Schema::dropIfExists('application_hospital');
    }
}
