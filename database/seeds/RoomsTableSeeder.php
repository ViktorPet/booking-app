<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Lecture 11 */
        $faker = Faker\Factory::create();

        /* Lecture 11 */
        for ($i = 1; $i <= 100; $i++) {

            DB::table('rooms')->insert([

                'room_size' => $faker->numberBetween(1, 5),
                'type' => $faker->randomElement($array = array ('Single','Double','Apartment')),
                'price' => $faker->numberBetween(100, 600),
                'description' => $faker->text(200),
                'hotel_id' => $faker->numberBetween(1, 10),


            ]);
        }
    }


}