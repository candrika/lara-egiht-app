<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('product_id');
            $table->char('barcode',150);
            $table->char('no_sku',150);
            $table->char('product_name',150);
            $table->integer('product_category');
            $table->integer('product_unit_weight');
            $table->integer('product_unit_measurement');
            $table->integer('stock_available');
            $table->smallInteger('is_sell')->default(1);
            $table->double('sell_price',12,0);
            $table->smallInteger('is_purchase');
            $table->double('purchase_price',12,0);
            $table->smallInteger('display')->default(null);
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
        Schema::dropIfExists('product');
    }
}
