<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('application_actions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('action_ch')->comment('项目用户行为');
            $table->string('action_en')->comment('项目用户行为');
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
        Schema::table('application_actions', function (Blueprint $table) {
            $table->dropForeign('application_actions_application_id_foreign');
        });
        Schema::dropIfExists('application_actions');
    }
}
