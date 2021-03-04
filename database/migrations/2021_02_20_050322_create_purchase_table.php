<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase', function (Blueprint $table) {
            $table->increments('idpurchase');
            $table->integer('customer_id');
            $table->char('no_po');
            $table->smallInteger('status')->comments('1 unpaid 2 paid');
            $table->date('date_purchase');
            $table->double('disc',12,2);
            $table->double('subtotal_amount',12,2);
            $table->double('delivery_cost',12,2);
            $table->double('grandtotal_amount');
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
        Schema::dropIfExists('purchase');
    }
}
