<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInviteLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('invite_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('supper_user_id')->comment('父用户id');
            $table->unsignedInteger('sub_user_id')->comment('子用户id');
            $table->unsignedInteger('application_id')->comment('项目id');
            $table->timestamps();

            $table->foreign('supper_user_id')->references('id')->on('md_users');
            $table->foreign('sub_user_id')->references('id')->on('md_users');
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
        Schema::table('invite_logs', function (Blueprint $table) {
            $table->dropForeign('invite_logs_supper_user_id_foreign');
            $table->dropForeign('invite_logs_sub_user_id_foreign');
            $table->dropForeign('invite_logs_application_id_foreign');
        });
        Schema::dropIfExists('invite_logs');
    }
}
