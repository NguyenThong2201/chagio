<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_review', function (Blueprint $table) {
	        $table->increments('id');
	        $table->bigInteger('product_id');
	        $table->bigInteger('user_id');
	        $table->string('title')->nullable();
	        $table->integer('rating')->default(0);
	        $table->integer('status')->default(0);
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
        Schema::drop('products_review');
    }
}
