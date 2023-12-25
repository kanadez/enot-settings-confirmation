<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsQueueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions_queue', function (Blueprint $table) {
            $table->id();
            $table->string('session_id');
            $table->string('type'); // image / video
            $table->string('status'); // new / pending / success / failed
            $table->unsignedBigInteger('input_image_id');
            $table->unsignedBigInteger('processing_file_id');
            $table->unsignedBigInteger('output_image_id')->nullable();
            $table->unsignedBigInteger('output_video_id')->nullable();
            $table->timestamps();
        });

        Schema::table('sessions_queue', function(Blueprint $table) {
            $table->index('session_id');
            $table->foreign('session_id')->references('id')->on('sessions')->onDelete('cascade');

            $table->index('input_image_id');
            $table->foreign('input_image_id')->references('id')->on('sessions_input_images')->onDelete('cascade');

            $table->index('processing_file_id');
            $table->foreign('processing_file_id')->references('id')->on('sessions_processing_files')->onDelete('cascade');

            $table->index('output_image_id');
            $table->foreign('output_image_id')->references('id')->on('sessions_output_images')->onDelete('cascade');

            $table->index('output_video_id');
            $table->foreign('output_video_id')->references('id')->on('sessions_output_videos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sessions_queue');
    }
}
