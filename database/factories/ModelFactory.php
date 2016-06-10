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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'RutUsuario' => $faker->phoneNumber,
        'name' => $faker->name,
        'DireccionUsuario' => $faker->address,
        'FonoUsuario' => $faker->phoneNumber,
        'email' => $faker->safeEmail,
        'ApellidoPaternoUsuario' => $faker->lastName,
        'ApellidoMaternoUsuario' => $faker->lastName,
        'ComunaUsuario' => $faker->city,
        'password' =>bcrypt('random(10)'),
        'remember_token' => str_random(10),
    ];
});


// 'password' => $faker->bcrypt(srt_random(10)),