<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('register_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->comment('用户id');
            $table->unsignedInteger('application_id')->comment('项目id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('md_users');
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
        Schema::table('register_logs', function (Blueprint $table) {
            $table->dropForeign('register_logs_user_id_foreign');
            $table->dropForeign('register_logs_application_id_foreign');
        });
        Schema::dropIfExists('register_logs');
    }
}
