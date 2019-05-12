<?php

namespace Tests\Feature;

use App\Hotel;
use App\City;
use App\Photo;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewHotelsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     *
     * @test
     */

    use RefreshDatabase;

    public function view_hotels_list()
    {

      //  $hotel = factory(Hotel::class, 10)->create();

        //dd($hotel);

     //   $city = factory(City::class, 10)->make();


      // $hotel->load('city');



       // dd($city);

      // $photo = factory(Photo::class)->create();

     //   $response = $this->get('/hotels');

      //  $response->assertStatus(200);

      // $response =  $this->get('/hotels');

        // Stages of the test

        // 1. Arrange
        // Create Hotel

        $hotels = factory(Hotel::class, 10)->create(/*[

            'name' => 'Washington',
            'description' => 'Blalalalalalalalalallalallalal',
            'city_id' => 2
        ]*/);

       // dd($hotels);

        // 2. Act
        // View hotel listing


        $response = $this->get('/hotels');

        $response->assertViewIs('frontend.hotels');






    }
}
