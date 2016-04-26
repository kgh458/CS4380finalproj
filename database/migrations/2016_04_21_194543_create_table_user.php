<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('user');
        Schema::create('user', function (Blueprint $table) {
            $table->string('username', 6)->unique();
            $table->string('fname', 15);
            $table->string('lname', 25);
            $table->integer('department')->references('departmentId')->on('department');
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
            $table->primary('username');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user');
    }
}