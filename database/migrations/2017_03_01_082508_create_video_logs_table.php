<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('video_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->comment('用户id');
            $table->unsignedInteger('application_id')->comment('项目id');

            $table->string("video_name")->comment("视频名字");
            $table->string("video_labels")->nullable()->comment("视频标签, 可能含多个");
            $table->string("video_abstract")->nullable()->comment("视频摘要");
            $table->dateTime("time_start")->comment("视频播放开始时间");
            $table->decimal("time_span", 10, 2)->comment("视频播放长度, 分钟单位");
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
        Schema::table('video_logs', function (Blueprint $table) {
            $table->dropForeign('video_logs_user_id_foreign');
            $table->dropForeign('video_logs_application_id_foreign');
        });
        Schema::dropIfExists('video_logs');
    }
}
