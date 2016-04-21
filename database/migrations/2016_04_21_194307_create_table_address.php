<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('address');
        Schema::create('address', function (Blueprint $table) {
            $table->increments('addressId');
            $table->string('str_addr', 30);
            $table->string('zip_code', 6);
            $table->string('state', 2);
            $table->string('city', 15);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('address');
    }
}
