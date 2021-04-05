<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cod', function (Blueprint $table) {
            $table->increments('cod_id');
            $table->bigInteger('payment_id');
            $table->bigInteger('brgy_id');
            $table->string('address');
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
        Schema::dropIfExists('cash_on_deliveries');
    }
}
