<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_item', function (Blueprint $table) {
            $table->increments('idsalesitems');
            $table->integer('idsales');
            $table->integer('product_id');
            $table->double('price');
            $table->integer('qty');
            $table->integer('userin');
            $table->integer('usermod');
            $table->smallInteger('display');
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
        Schema::dropIfExists('sales_item');
    }
}
