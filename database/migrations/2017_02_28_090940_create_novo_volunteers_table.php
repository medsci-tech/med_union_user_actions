<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNovoVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('novo_volunteers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->comment('用户id');

            $table->string('initial')->unique()->comment('代表initial');
            $table->string('region')->nullable()->comment('代表所在大区');
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
        Schema::table('novo_volunteers', function (Blueprint $table) {
            $table->dropForeign('novo_volunteers_user_id_foreign');
        });
        Schema::drop('novo_volunteers');
    }
}
