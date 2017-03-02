<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('shop_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->comment('用户id');
            $table->unsignedInteger('application_id')->comment('项目id');

            $table->string("product_name")->comment("商品名");
            $table->string("product_labels")->nullable()->comment("商品标签, 可能含多个");
            $table->string("product_abstract")->nullable()->comment("商品摘要");
            $table->decimal("money_cost", 10, 2)->comment("视频播放长度, 分钟单位");
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('md_users');
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
        Schema::table('shop_logs', function (Blueprint $table) {
            $table->dropForeign('shop_logs_user_id_foreign');
            $table->dropForeign('shop_logs_application_id_foreign');
        });
        Schema::dropIfExists('shop_logs');
    }
}
