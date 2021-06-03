<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventForcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_forces', function (Blueprint $table) {
            $table->id();
            $table->string('h_portfolio')->nullable();
            $table->longText('d_who_we_are')->nullable();
            $table->longText('doc_desc')->nullable();
            $table->string('con_banner')->nullable();
            $table->longText('google_loc')->nullable();
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
        Schema::dropIfExists('event_forces');
    }
}
