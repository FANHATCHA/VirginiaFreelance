<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddDestinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_destinations', function (Blueprint $table) {
          $table->increments('id');
          $table->string('slug')->unique();
          $table->string('destinationName');
          $table->string('destImgIcon');
          $table->string('localAgentName');
          $table->string('localAgentImg');
          $table->longText('description');
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
        Schema::dropIfExists('add_destinations');
    }
}
