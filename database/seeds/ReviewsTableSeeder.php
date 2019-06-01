<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        /* Lecture 10 */
        for ($i = 1; $i <= 50; $i++) {

            DB::table('reviews')->insert([
                'content' => $faker->text(400),
                'rating' => $faker->numberBetween(1, 5),
                'user_id' => $faker->numberBetween(1, 10),
                'reviewable_type' => $faker->randomElement($array = array('App\Hotel', 'App\Article')),
                'reviewable_id' => $faker->numberBetween(1, 10),

            ]);
        }
    }
}
