<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNovoVolunteerDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('novo_volunteer_doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('novo_volunteer_id')->unsigned()->comment('novo代表id');
            $table->integer('doctor_id')->unsigned()->comment('医生id');
            $table->integer('application_id')->unsigned()->comment('项目id');
            $table->timestamps();

            $table->foreign('novo_volunteer_id')->references('id')->on('novo_volunteers');
            $table->foreign('doctor_id')->references('id')->on('doctors');
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
        Schema::table('novo_volunteer_doctors', function (Blueprint $table) {
            $table->dropForeign('novo_volunteer_doctors_novo_volunteer_id_foreign');
            $table->dropForeign('novo_volunteer_doctors_doctor_id_foreign');
            $table->dropForeign('novo_volunteer_doctors_application_id_foreign');
        });
        Schema::dropIfExists('novo_volunteer_doctors');
    }
}
