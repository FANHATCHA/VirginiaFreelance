<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hot_deals', function (Blueprint $table) {
          $table->increments('id');
          $table->string('hotdeals_image');
          $table->string('reference');
          $table->string('slug');
          $table->string('hotDealTitle');
          $table->string('hotDealLocation');
          $table->string('whatIsItFor');
          $table->string('price');
          $table->longText('details');
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
        Schema::dropIfExists('hot_deals');
    }
}
