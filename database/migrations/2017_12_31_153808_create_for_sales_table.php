<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('for_sales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('forSale_image');
            $table->string('reference');
            $table->string('slug')->unique();
            $table->string('forSaleTitle');
            $table->string('status');
            $table->string('forSaleLocation');
            $table->string('whatIsItFor');
            $table->string('price');
            $table->longText('details');
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
        Schema::dropIfExists('for_sales');
    }
}
