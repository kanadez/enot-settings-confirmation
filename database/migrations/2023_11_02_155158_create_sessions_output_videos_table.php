<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsOutputVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions_output_videos', function (Blueprint $table) {
            $table->id();
            $table->string('session_id');
            $table->string('video_path');
            $table->timestamps();
        });

        Schema::table('sessions_output_videos', function(Blueprint $table) {
            $table->index('session_id');
            $table->foreign('session_id')->references('id')->on('sessions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sessions_output_videos');
    }
}
