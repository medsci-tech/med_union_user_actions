<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMdRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('md_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('role_en', 30)->unique()->comment('用户角色');
            $table->string('role_ch', 30)->unique()->comment('用户角色');
            $table->timestamps();
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
        Schema::dropIfExists('md_roles');
    }
}
