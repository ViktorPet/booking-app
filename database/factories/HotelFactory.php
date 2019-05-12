<?php

use Faker\Generator as Faker;

$factory->define(App\Hotel::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->word,
        'description' => $faker->text(1000),
        'city_id' => $faker->numberBetween(1,10),
        'user_id' => $faker->numberBetween(1,10),
    ];
});
