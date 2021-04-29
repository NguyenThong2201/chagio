<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
	        $table->bigInteger('category_id')->nullable();
            $table->string('title')->nullable();
	        $table->string('image')->nullable();
	        $table->string('metaTitle')->nullable();
	        $table->string('slug')->nullable();
	        $table->string('summary')->nullable();
	        $table->string('price')->nullable();
	        $table->string('sku')->nullable();
	        $table->float('discount')->default(0);
	        $table->integer('quantity')->default(0);
	        $table->integer('shop')->default(0);
	        $table->text('contents')->nullable();
	        $table->integer('status')->default(0);
            $table->tinyInteger('completed')->nullable();
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
        Schema::drop('products');
    }
}
