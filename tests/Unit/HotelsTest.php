<?php

namespace Tests\Unit;

use Illuminate\Support\Collection;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Hotel;
use App\Photo;




class HotelsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    use WithFaker;

    use RefreshDatabase;


    public function test_it_belongs_to_a_city()
    {

        $hotel = factory(Hotel::class)->create();

        //dd($hotel);
       $this->assertInstanceOf('App\City', $hotel->city);

      //$this->assertTrue();

    }

    public function  test_hotel_morph_many_photos(){

         $hotel = factory( Hotel::class, 3)->create();


          $photo = factory(Photo::class, 3)->create();

        $response = $this->get('/hotels');


        $response->assertSee($hotel->photos->path);


    }
}
