<?php

use Faker\Generator as Faker;

$factory->define(App\Photo::class, function (Faker $faker) {
    return [
        'photoable_type' => 'App\TouristObject',
        'photoable_id' => $faker->numberBetween(1, 10),
        'path' => $faker->imageUrl(800, 400, 'city')
    ];
});
