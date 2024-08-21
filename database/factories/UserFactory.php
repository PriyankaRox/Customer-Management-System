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
    static $password;

    return [
        'first_name'       => $faker->firstName,
        'last_name'        => $faker->lastName,
        'email'            => $faker->unique()->safeEmail,
        'password'         => $password ?: $password = bcrypt('secret'),
        'remember_token'   => str_random(10),
    ];
});


$factory->define(App\Client::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
        'created_user_id' => 1,
    ];
});

$factory->define(App\Customer::class, function (Faker $faker) {

    //$gender = $faker->randomElements(['male', 'female'])[0];
    return [
        'name' => $faker->name,
        'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'gender' => implode($faker->randomElements(['male', 'female'])),
        'email' => $faker->email,
        'mobile' => $faker->phoneNumber,
        'address' => $faker->address,
        'city' => $faker->city,
        'pin' => $faker->postcode,
        'state' => $faker->state,
        'country' => $faker->country,
        'adhar_number' => $faker->phoneNumber,
        'religion' => $faker->text,
        'caste' => $faker->text,
        'category' => $faker->text,
        'emergency_contacts' => $faker->phoneNumber,
        'created_user_cid' => 1,
    ];
});

$factory->define(App\Location::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
        'street' => $faker->street,
        'address' => $faker->address,
        'city' => $faker->city,
        'pin' => $faker->postcode,
        'mobile' => $faker->phoneNumber,
        'contact_person' => $faker->text,
        'created_user_cid' => 1,
    ];
});