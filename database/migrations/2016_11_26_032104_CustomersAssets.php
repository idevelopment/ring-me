<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CustomersAssets extends Migration
{
    /**
     * Run the migration.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('customers_assets', function(Blueprint $t) {
          $t->increments('asset_id');
          $t->integer('customer_id');
          $t->integer('product_id');
          $t->timestamps();
      });
    }

    /**
     * Reverse the migration.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('customers_assets');
    }
}
