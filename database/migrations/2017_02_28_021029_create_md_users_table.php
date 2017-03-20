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
            $table->string('email', 40)->unique()->nullable()->comment('用户邮箱');
            $table->string('province')->nullable()->comment('省');
            $table->string('city')->nullable()->comment('市');
            $table->string('area')->nullable()->comment('区');
            $table->string('password')->nullable()->comment('用户密码 明文');
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
        Schema::dropIfExists('md_users');
    }
}
