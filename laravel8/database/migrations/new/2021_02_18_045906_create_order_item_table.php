<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_item', function (Blueprint $table) {
            $table->increments('id');
	        $table->bigInteger('product_id')->nullable();
            $table->string('order_id')->nullable();
	        $table->string('sku')->nullable();
	        $table->float('price')->default(0);
	        $table->float('discount')->default(0);
	        $table->float('quantity')->default(0);
	        $table->text('contents')->nullable();
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
        Schema::drop('order_item');
    }
}
