<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('idsales');
            $table->integer('customer_id');
            $table->char('no_sales');
            $table->smallInteger('status')->comments('1 unpaid 2 paid');
            $table->smallInteger('sell_type')->comments('1 cash 2 tempo');
            $table->date('date_sales');
            $table->double('disc',12,2);
            $table->double('subtotal_amount',12,2);
            $table->double('delivery_cost',12,2);
            $table->double('grandtotal_amount');
            $table->smallInteger('payment_type');
            $table->smallInteger('display');
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
        Schema::dropIfExists('sales');
    }
}
