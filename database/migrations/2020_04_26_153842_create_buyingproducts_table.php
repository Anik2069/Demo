<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyingproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyingproducts', function (Blueprint $table) {
            $table->id();
            $table->string('group');
            $table->string('product_name');
            $table->string('buyingamount');
            $table->string('unit');
            $table->string('mfgdate');
            $table->string('expiredate');
            $table->string('buying');
            $table->string('date');
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
        Schema::dropIfExists('buyingproducts');
    }
}
