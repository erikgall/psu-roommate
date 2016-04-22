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

$factory->define(App\Users\User::class, function (Faker\Generator $faker) {

    return [
        'name'               => $faker->name,
        'dob'                => $faker->dateTimeBetween('-25 years', '-18 years'),
        'academic_status_id' => 1,
        'school_id'          => 1,
        'gender_id'          => 1,
        'email'              => $faker->safeEmail,
        'password'           => bcrypt(str_random(10)),
        'remember_token'     => str_random(10),
    ];
});

$factory->define(App\Surveys\Response::class, function (Faker\Generator $faker) {

    return [
        'user_id'   => null,
        'answer_id' => null,
    ];
});
