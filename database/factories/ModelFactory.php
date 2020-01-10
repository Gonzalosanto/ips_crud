<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Usuario::class, function (Faker $faker) {
    return [
        'Username' =>$faker->sentence(1),
        'Nombre'   =>$faker->name,
        'Apellido' =>$faker->sentence(1),
        'Email'    =>$faker->unique()->safeEmail,
         
    ];
});
