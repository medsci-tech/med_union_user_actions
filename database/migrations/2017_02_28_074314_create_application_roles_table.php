<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('application_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('application_id')->comment('项目id');
            $table->string('role_en')->comment('用户角色');
            $table->string('role_ch')->comment('用户角色');
            $table->timestamps();

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
        Schema::table('application_roles', function (Blueprint $table) {
            $table->dropForeign('application_roles_application_id_foreign');
        });
        Schema::dropIfExists('application_roles');
    }
}
