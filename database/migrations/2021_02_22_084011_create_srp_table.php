<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSrpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('srp', function (Blueprint $table) {
            $table->integer('srp_id');
            $table->bigInteger('product_id');
            $table->bigInteger('unit_id');
            $table->double('product_price',8,2);
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
        Schema::dropIfExists('s_r_p_s');
    }
}
