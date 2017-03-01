<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNovoVolunteerHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('novo_volunteer_hospitals', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned()->comment('novo代表id');
            $table->integer('hospital_id')->unsigned()->comment('医院id');
            $table->integer('application_id')->unsigned()->comment('项目id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('md_users');
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
        Schema::table('novo_volunteer_hospitals', function (Blueprint $table) {
            $table->dropForeign('novo_volunteer_hospitals_user_id_foreign');
            $table->dropForeign('novo_volunteer_hospitals_hospital_id_foreign');
            $table->dropForeign('novo_volunteer_hospitals_application_id_foreign');
        });
        Schema::drop('novo_volunteer_hospitals');
    }
}
