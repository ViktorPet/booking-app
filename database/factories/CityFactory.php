<?php

use Faker\Generator as Faker;

$factory->define(App\City::class, function (Faker $faker) {

    for ($i = 0; $i < 10 ; $i++) {
        return [
            'name' => $faker->unique()->city,
        ];

    }
});
