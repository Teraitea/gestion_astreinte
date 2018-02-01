<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsFromRssFeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_from_rss_feeds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('title');
            $table->string('link');
            $table->integer('rss_feed_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->text('description');
            $table->datetime('pubdate');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('rss_feed_id')->references('id')->on('rss_feed');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_from_rss_feeds');
    }
}
