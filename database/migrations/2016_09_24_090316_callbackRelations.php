<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CallbackRelations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('callback_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('callback_id')->unsigned()->index();
            $table->foreign('callback_id')->references('id')->on('callbacks')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('callback_departments' , function (Blueprint $table) {
            $table->increments('id');
            $table->integer('callback_id')->unsigned()->index();
            $table->foreign('callback_id')->references('id')->on('callbacks')->onDelete('cascade');

            $table->integer('departments_id')->unsigned()->index();
            $table->foreign('departments_id')->references('id')->on('departments')->onDelete('cascade');
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
        Schema::dropIfexists('callback_departments');
        Schema::dropIfExists('callback_user');
    }
}
