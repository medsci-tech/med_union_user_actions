<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMdUserAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('md_user_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->comment('用户id');

            $table->string('province')->nullable()->comment('省');
            $table->string('city')->nullable()->comment('市');
            $table->string('area')->nullable()->comment('区');
            $table->boolean('if_prime')->default(false)->nullable()->comment('是否为默认地址');
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
        Schema::table('md_user_addresses', function (Blueprint $table) {
            $table->dropForeign('md_user_addresses_user_id_foreign');
        });
        Schema::dropIfExists('md_user_addresses');
    }
}
