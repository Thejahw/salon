<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'first_name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'last_name'=>$faker->name,
        'description'=>$faker->text,
        'profile_pic'=>$faker->imageUrl($width = 640, $height = 480),
        'gender'=>$faker->title($gender = null|'male'|'female'),
        'phase_rate'=>$faker->randomDigit,
        'contact'=>$faker->phoneNumber,
        'totalRate'=>$faker->randomDigit,
        'location'=>$faker->state,
        'home_no'=>$faker->postcode,
        'street_address'=>$faker->streetName  ,
        'city'=>$faker->city ,
        'state'=>$faker->state,
        'education'=>$faker->catchPhrase,
        'Experiance'=>$faker->jobTitle  ,
        'calender_id'=>$faker->randomDigit ,
        'resrve_id'=>$faker->randomDigit ,
    ];
});
