<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMdUserLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('md_user_locations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->comment('用户id');

            $table->decimal('latitude', 10, 2)->nullable()->comment('经度');
            $table->decimal('longitude', 10, 2)->nullable()->comment('纬度');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('md_users');
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
        Schema::table('md_user_locations', function (Blueprint $table) {
            $table->dropForeign('md_user_locations_user_id_foreign');
        });
        Schema::dropIfExists('md_user_locations');
    }
}
