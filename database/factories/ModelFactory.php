<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
$localisedFaker = Faker\Factory::create("id_ID");

$factory->define(App\User::class, function (Faker\Generator $faker) {
    $date = strtotime('05-11-2016');
    $newdate = date('Y-m-d',$date);
    return [
        'name' => $faker->name,
        'username' => mt_rand(111111,222222),
        'password' => bcrypt('trainee'),
        'role' => 'trainee',
        'gender' => $faker->randomElement($array = ['Male', 'Female']),
        'join_date' => $newdate,
        'remember_token' => str_random(10),
    ];
});
