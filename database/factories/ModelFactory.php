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

$factory->define(App\Models\Unit::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->unique()->word,
        'sector' => $faker->word,
        'state' => collect(\App\Models\State::$states)->random(),
        'city' => $faker->city,
    ];
});

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    $unit = factory(\App\Models\Unit::class)->create();

    return [
        'enrolment' => str_random(4),
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = app('hash')->make('secret'),
        'api_token' => str_random(32),
        'unit_id' => $unit->id,
    ];
});
