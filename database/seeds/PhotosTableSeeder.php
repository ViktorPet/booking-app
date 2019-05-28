
<?php
/*
|--------------------------------------------------------------------------
| database/seeds/PhotosTableSeeder.php *** Copyright netprogs.pl | avaiable only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
*/

use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();


        for ($i = 1; $i <= 10; $i++) {

            DB::table('photos')->insert([
                'photoable_type' => 'App\Hotel',
                'photoable_id' => $faker->numberBetween(1, 10),
                'path' => $faker->imageUrl(800, 400, 'city')
            ]);
        }

    }
}

