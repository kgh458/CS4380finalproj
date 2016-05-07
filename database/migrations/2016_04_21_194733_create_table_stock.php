<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStock extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('stock');
        Schema::create('stock', function (Blueprint $table) {
            $table->integer('itemId')->unsigned()->references('itemId')->on('rental_item');
            $table->integer('quantity_avail');
            $table->integer('quntity_rented');
            $table->primary('itemId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stock');
    }
}
