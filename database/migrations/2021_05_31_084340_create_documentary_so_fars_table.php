<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentarySoFarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentary_so_fars', function (Blueprint $table) {
            $table->id();
            $table->string('list_no')->nullable();
            $table->string('list')->unique();
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
        Schema::dropIfExists('documentary_so_fars');
    }
}
