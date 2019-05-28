<?php

use Faker\Generator as Faker;

$factory->define(App\City::class, function (Faker $faker) {

    return [
        'name' => $faker->unique()->word,

        'hotel_id' =>  $faker->numberBetween(1,10)];
});
