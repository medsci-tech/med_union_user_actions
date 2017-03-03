<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->comment('用户id');
            $table->integer('hospital_id')->unsigned()->comment('医院id');

            $table->string('title')->nullable()->comment('医生职称');
            $table->string('office')->nullable()->comment('医生科室');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('md_users');
            $table->foreign('hospital_id')->references('id')->on('hospitals');
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
        Schema::table('doctors', function (Blueprint $table) {
            $table->dropForeign('doctors_user_id_foreign');
            $table->dropForeign('doctors_hospital_id_foreign');
        });
        Schema::dropIfExists('doctors');
    }
}
