<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasicLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('basic_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->comment('用户id');
            $table->unsignedInteger('application_id')->comment('项目id');
            $table->string("action_label")->comment("行为");
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
        Schema::table('basic_logs', function (Blueprint $table) {
            $table->dropForeign('basic_logs_user_id_foreign');
            $table->dropForeign('basic_logs_application_id_foreign');
        });
        Schema::dropIfExists('basic_logs');
    }
}
