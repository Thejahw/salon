<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->increments('Id')->autoIncrement();
            $table->unsignedInteger('s_id');
            $table->integer('skill_id');


           
            $table->foreign('s_id')->references('sid')->on('users');
           
        });
    }

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
        Schema::dropIfExists('skills');
    }
}
