<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_history', function (Blueprint $table) {
            $table->increments('stock_history_id');
            $table->integer('product_id');
            $table->integer('last_stock');
            $table->integer('curr_stock');
            $table->integer('new_stock');
            $table->smallInteger('stock_adjusment')->comment('1 stock in 2 stock out 3 sell stock return 4 purchase stock return 5 cancelation transaction');
            $table->timestamp('transaction_time');
            $table->integer('userin'); 
            $table->integer('usermod'); 
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
        Schema::dropIfExists('stock_history');
    }
}
