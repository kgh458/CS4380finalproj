<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDepartment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('department');
        Schema::create('department', function (Blueprint $table) {
            $table->integer('departmentId')->unique();
            $table->string('departmentName', 15);
            $table->integer('addressId')->unsigned()->references('addressId')->on('address')-> ON DELETE CACASCADE;
            $table->primary("departmentId");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('department');
    }
}
