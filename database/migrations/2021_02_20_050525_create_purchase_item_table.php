<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_item', function (Blueprint $table) {
            $table->increments('idpurchaseitems');
            $table->integer('idpurchase');
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
        Schema::dropIfExists('purchase_item');
    }
}
