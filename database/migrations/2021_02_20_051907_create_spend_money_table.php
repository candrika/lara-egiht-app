<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpendMoneyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spend_money', function (Blueprint $table) {
            $table->increments('id_spend_money');
            $table->double('subtotal_amount');
            $table->double('grandtotal_amount');
            $table->integer('spend_for');
            $table->text('memo');
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
        Schema::dropIfExists('spend_money');
    }
}
