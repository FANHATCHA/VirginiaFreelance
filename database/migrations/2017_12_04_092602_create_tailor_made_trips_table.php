<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTailorMadeTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tailor_made_trips', function (Blueprint $table) {
          $table->increments('id');
          $table->string('destination_slug');
          $table->string('tailorTrip_image');
          $table->string('tailorTripTitle');
          $table->longText('description');
          $table->integer('numberofStars');
          $table->string('price');
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
        Schema::dropIfExists('tailor_made_trips');
    }
}
