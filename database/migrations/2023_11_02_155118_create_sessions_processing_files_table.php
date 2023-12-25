<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsProcessingFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions_processing_files', function (Blueprint $table) {
            $table->id();
            $table->string('session_id');
            $table->string('file_path');
            $table->timestamps();
        });

        Schema::table('sessions_processing_files', function(Blueprint $table) {
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
        Schema::dropIfExists('sessions_processing_files');
    }
}
