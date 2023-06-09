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
        Schema::create('products', function(Blueprint $table){
            $table -> bigIncrements('product_id')->unsigned();
            $table->string('name');
            $table->integer('price');
            $table->string('image');
            $table->string('description');
            $table->unsignedbigInteger('category_id');
            $table->unsignedbigInteger('supplier_id');
            $table->foreign('category_id')->references('category_id')->on('categories');
            $table->foreign('supplier_id')->references('supplier_id')->on('suppliers');
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
