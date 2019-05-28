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
    use WithFaker, RefreshDatabase ;




    public function user_can_view_hotels_list()
    {

        $this->withoutExceptionHandling();



        // 1. Arrange
        // Create Hotel

        $hotel = factory(Hotel::class)->create();


        // 2. Act
        // View hotel listing
        /*dd($hotel);*/

        $response = $this->get('/');

        // 3) Assert

        $response->assertStatus(200);
        $response->assertSee($hotel->title);
        $response->assertSee($hotel->description);
        $response->assertSee($hotel->city->name);
        $response->assertSee($hotel->city->name);

      //  $response->assertSee($hotel->photos->link);








    }
}
