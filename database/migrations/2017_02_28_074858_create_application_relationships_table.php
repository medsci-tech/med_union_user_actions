<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationRelationshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('application_relationships', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->comment('用户id');
            $table->unsignedInteger('upper_id')->comment('上游id');
            $table->unsignedInteger('application_id')->comment('项目id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('md_users');
            $table->foreign('upper_id')->references('id')->on('md_users');
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
        Schema::table('application_relationships', function (Blueprint $table) {
            $table->dropForeign('application_relationships_user_id_foreign');
            $table->dropForeign('application_relationships_upper_id_foreign');
            $table->dropForeign('application_relationships_application_id_foreign');
        });
        Schema::dropIfExists('application_relationships');
    }
}
