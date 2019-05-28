<?php

use Faker\Generator as Faker;

$factory->define(App\Hotel::class, function (Faker $faker) {
    return [
        'title' => $faker->unique()->word,
        'description' => $faker->text(100),
        'city_id' =>  function () {
            return factory(App\City::class)->create()->id;},
        'user_id' => $faker->numberBetween(1,10),
    ];
});
