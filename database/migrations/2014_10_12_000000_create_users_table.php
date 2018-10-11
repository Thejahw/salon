<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('sid');
            $table->string('first_name');
            $table->string('last_name');
            $table->text('description');
            $table->string('email')->unique();
            $table->binary('profile_pic');
            $table->string('gender');
            $table->string('contact');
            $table->double('total_rate');
            $table->float('phase_rate');// rate would be defined for half of the day
            $table->string('location');
            $table->string('home_no');
            $table->string('street_address');
            $table->string('city');
            $table->string('state');
            $table->string('password');

            $table->text('Experiance');
            $table->integer('calender_id');
            $table->integer('resrve_id');
        });
    }

    // Public function gallery(){ 

    //     Return $this->hasMany('App\gallery'); 
        
    // }

    // Public function reservation   (){ 

    //     Return $this->hasMany('App\gallery'); 
        
    // }
        
    //  public function calender()
    //  {
    //         return $this->hasOne('App\calender');
    // }

    // Public function skill(){ 

    //     Return $this->hasMany('App\gallery'); 
        
    // }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
