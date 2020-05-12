<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeelingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seelings', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('invoice');
            $table->string('group');
            $table->string('product_name');
            $table->string('selling');
            $table->string('unit');
            $table->string('unitprice');
            $table->string('total');
            $table->string("seller");
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
        Schema::dropIfExists('seelings');
    }
}
