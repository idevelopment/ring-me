<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PivotCallbackCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('callback_customer', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('callback_id')->unsigned()->index();
            $table->foreign('callback_id')->references('id')->on('callbacks')->onDelete('cascade');
            $table->integer('customer_id')->unsigned()->index();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
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
        Schema::drop('callback_customer');
    }
}
