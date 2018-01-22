<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()//realiza cambios 
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('product_name');
            //$table->primary('category_id');
            $table->text('description');
            $table->decimal('precio',9,2);//el precio pude tener 9 digitos y 2 decimales
            //$table->foreign('category_id')->references('id')->on('category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()//revierte los cambios
    {
        Schema::dropIfExists('products');
    }
}
