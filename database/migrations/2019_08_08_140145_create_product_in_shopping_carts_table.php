<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductInShoppingCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_in_shopping_carts', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->integer("producto_id")->unsigned();
            $table->foreign("producto_id")->references("id")->on("productos");

            $table->integer("shopping_cart_id")->unsigned();
            $table->foreign("shopping_cart_id")->references("id")->on("shopping_carts");

            $table->integer("amount")->default(1);

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
        Schema::dropIfExists('product_in_shopping_carts');
    }
}
