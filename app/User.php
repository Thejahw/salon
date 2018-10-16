<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    public $timestamps = false;
    protected $fillable = [
        'first_name',
        'last_name',
        'description',
        'email',
        'profile_pic',
        'gender',
        'profilePic',
        'phase_rate',
        'contact',
        'totalRate',
        'hRate',
        'location',
        'home_no',
        'street_address',
        'city',
        'state',
        'password',
        'education',
        'Experiance',
        'calender_id',
        'resrve_id',
    ];



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
    ];
    
}
