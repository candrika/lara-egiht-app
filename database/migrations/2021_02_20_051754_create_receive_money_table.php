<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiveMoneyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receive_money', function (Blueprint $table) {
            $table->increments('id_receive_money');
            $table->double('subtotal_amount');
            $table->double('grandtotal_amount');
            $table->integer('receive_from');
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
        Schema::dropIfExists('receive_money');
    }
}
