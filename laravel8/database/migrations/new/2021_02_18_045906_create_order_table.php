<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
	        $table->bigInteger('user_id')->nullable();
            $table->string('session_id')->nullable();
	        $table->string('token')->nullable();
	        $table->string('status')->nullable();
	        $table->float('sub_total')->default(0);
	        $table->float('item_discount')->default(0);
	        $table->float('tax')->default(0);
	        $table->float('shipping')->default(0);
	        $table->integer('total')->default(0);
	        $table->string('promo')->nullable();
	        $table->float('discount')->default(0);
	        $table->float('grand_total')->default(0);
	        $table->string('full_name')->nullable();
	        $table->string('mobile')->nullable();
	        $table->string('email')->nullable();
	        $table->string('address')->nullable();
	        $table->string('city')->nullable();
	        $table->string('province')->nullable();
	        $table->string('country')->nullable();
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
        Schema::drop('order');
    }
}
