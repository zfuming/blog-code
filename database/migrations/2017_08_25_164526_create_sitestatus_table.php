<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitestatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('day')->index();
            $table->integer('register_count')->unsigned()->default(0);
            $table->integer('github_regitster_count')->unsigned()->default(0);
            $table->integer('wechat_registered_count')->unsigned()->default(0);
            $table->tinyInteger('article_count')->unsigned()->default(0);
            $table->tinyInteger('question_count')->unsigned()->default(0);
            $table->integer('comment_count')->unsigned()->default(0);
            $table->integer('reply_count')->unsigned()->default(0);
            $table->integer('image_count')->unsigned()->default(0);
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
        Schema::dropIfExists('site_status');
    }
}
