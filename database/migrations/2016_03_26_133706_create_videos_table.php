<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',25)->index();
            $table->string('description',255);
            $table->string('video_url',255);
            $table->string('cover_url',255);

            $table->unsignedInteger('user_id')->index();
            $table->unsignedInteger('series_id')->index();

            $table->unsignedInteger('watch_count')->default(0)->index();
            $table->unsignedInteger('reply_count')->default(0)->index();
            $table->unsignedInteger('favorite_count')->default(0)->index();

            $table->softDeletes();
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
        Schema::drop('videos');
    }
}
