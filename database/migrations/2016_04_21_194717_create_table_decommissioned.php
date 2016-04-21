<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDecommissioned extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('decommissioned');
        Schema::create('decommissioned', function (Blueprint $table) {
            $table->integer('itemId')->unsigned()->references('itemId')->on('rental_item');
            $table->string('reason', 200);
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
        Schema::drop('decommissioned');
    }
}
