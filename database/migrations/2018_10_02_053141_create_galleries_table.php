<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('galleries')) {
            Schema::create('galleries', function (Blueprint $table) {
                $table->increments('image_id');
                $table->unsignedInteger('s_id');
                $table->binary('galery_image');

                $table->foreign('s_id')->references('sid')->on('users');




            });
        }
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
        Schema::dropIfExists('galleries');
    }
}
