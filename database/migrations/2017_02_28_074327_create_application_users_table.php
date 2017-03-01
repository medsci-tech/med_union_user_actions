<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('application_users', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->comment('用户id');
            $table->unsignedInteger('application_id')->comment('项目id');
            $table->unsignedInteger('application_role_id')->comment('项目角色id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('md_users');
            $table->foreign('application_id')->references('id')->on('applications');
            $table->foreign('application_role_id')->references('id')->on('application_roles');
        });
    }

    /**application_
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('application_users', function (Blueprint $table) {
            $table->dropForeign('application_users_application_id_foreign');
            $table->dropForeign('application_users_user_id_foreign');
            $table->dropForeign('application_users_application_role_id_foreign');
        });
        Schema::dropIfExists('application_users');
    }
}
