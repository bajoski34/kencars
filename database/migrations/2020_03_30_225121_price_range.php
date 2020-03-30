<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PriceRange extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_range', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('amount');
            

            $table->integer('renttime_id')->unsigned();
            $table->foreign('renttime_id')
                ->references('id')
                ->on('rent_time');

            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')
                ->references('id')
                ->on('vehicle_categories');

            $table->softDeletes();
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
        Schema::dropIfExists('price_range');
    }


}
