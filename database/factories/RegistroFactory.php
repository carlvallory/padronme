<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Registro;
use Faker\Generator as Faker;

$factory->define(Registro::class, function (Faker $faker) {

    return [
        'matricula' => $faker->randomDigitNotNull,
        'ssn' => $faker->randomDigitNotNull,
        'estado' => $faker->word,
        'nombres' => $faker->word,
        'apellidos' => $faker->word,
        'fch_nac' => $faker->word,
        'vote_2018' => $faker->word,
        'departamento' => $faker->word,
        'distrito' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
