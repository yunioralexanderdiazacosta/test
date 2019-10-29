<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
 use App\Persona;

$factory->define(Persona::class, function (Faker $faker) {
    return [
        'cedula' => $faker->unique()->randomNumber($nbDigits = 6),
        'nombre' => $faker->name,
        'correo' => $faker->email,
        'cargo_id' => $faker->numberBetween($min = 1, $max = 3),
    ];
});
