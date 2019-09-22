<?php

use Faker\Generator as faker;

$factory->define(App\Users::class, function (Faker $faker) {
    return [

        'id' => $factory (users::class)->create(),
        'name' => $faker->name,
        'email' => $faker->unique()->safeemail,
        'password' => $password ?: $password = bcrypt('secret'),
    ];
});