<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('transactions', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id')->unsigned();
          $table->integer('amount');
          $table->string('category');
          $table->timestamps();
          $table->timestamp('created_at')->nullable();

          $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

          $table->foreign('category')
            ->references('title')
            ->on('categorys')
            ->onDelete('cascade');


      });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('transactions');
        //
    }
}
