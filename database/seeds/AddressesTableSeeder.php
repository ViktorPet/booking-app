<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

        $faker = Faker\Factory::create();

        DB::table('addresses')->insert([
            'number' => $faker->numberBetween(1,10),
            'street' => $faker->streetName,
            'hotel_id' => $faker->unique()->numberBetween(1,10),
        ]);
    }
}
