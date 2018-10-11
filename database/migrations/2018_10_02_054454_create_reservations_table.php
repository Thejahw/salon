<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('resrveId')->autoIncrement();
            $table->unsignedInteger('sId');
            $table->boolean('phase');//morning or evening
            $table->integer('saloonId'); //not forignkey because not implementing the saloon model

            $table->foreign('sId')->references('sid')->on('users');


        });
    }
// check weather this function needed
    // Public function  user(){ 

    //     Return $this->belongsTo('App\user'); 
        
    //     } 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
