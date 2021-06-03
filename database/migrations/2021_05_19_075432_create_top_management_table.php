<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopManagementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('top_management', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('job')->nullable();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('top_management');
    }
}
