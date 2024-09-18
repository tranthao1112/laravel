<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',150)->nullable();
            $table->string('email',150)->nullable();
            $table->string('phone',50)->nullable();
            $table->string('address',150)->nullable();
            $table->integer('customer_id')->unsigned();
            $table->tinyInteger('status')->default(0);
            $table->string('token',50)->nullable();
            $table->timestamps();
            $table->foreign('customer_id')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::table('orders',function(Blueprint $table){
            $table->dropForeign('orders_customer_id_foreign');
        });
        Schema::dropIfExists('orders');
    }
};
