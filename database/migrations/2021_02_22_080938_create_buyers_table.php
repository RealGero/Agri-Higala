<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyers', function (Blueprint $table) {
            $table->increments('buyer_id');
            $table->bigInteger('user_id');
            $table->bigInteger('brgy_id');
            $table->string('address')->nullable();  
            $table->date('birthdate')->nullable();
            $table->boolean('verified')->default(0);
            $table->enum('gender',['Male','Female','Prefer not to say'])->nullable();
            $table->string('valid_id_front')->default('default-id-front.jpg');
            $table->string('valid_id_back')->default('default-id-back.jpg');
            $table->date('verified_at')->nullable();
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
        Schema::dropIfExists('buyers');
    }
}
