<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentaryVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentary_videos', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('v_link')->nullable();
            $table->string('photo');
            $table->boolean('status')->default(true);
            $table->boolean('trash')->default(true);
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
        Schema::dropIfExists('documentary_videos');
    }
}
