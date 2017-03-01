<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMdUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('md_users', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('role_id')->comment('角色id');

            $table->string('name')->nullable()->comment('用户名字');
            $table->string('phone', 11)->unique()->comment('用户电话');
            $table->string('email')->unique()->nullable()->comment('用户邮箱');

            $table->string('password', 60)->nullable()->comment('用户密码');
            $table->timestamps();

            $table->foreign('role_id')->references('id')->on('md_roles');
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
        Schema::table('md_users', function(Blueprint $table) {
            $table->dropForeign('md_users_role_id_foreign');
        });
        Schema::drop('md_users');
    }
}
