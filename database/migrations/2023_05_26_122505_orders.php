<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function(Blueprint $table){
            $table -> bigIncrements('order_id')->unsigned();
            $table->date('date');
            $table->integer('total_price');
            $table->unsignedbigInteger('customer_id');
            $table->unsignedbigInteger('payment_id');
            $table->foreign('customer_id')->references('customer_id')->on('customers');
            $table->foreign('payment_id')->references('payment_id')->on('payments');
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
        //
    }
};