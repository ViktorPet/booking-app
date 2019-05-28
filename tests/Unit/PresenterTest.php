<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\User;



class PresenterTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_user_presenter()
    {
         // create users with formated full name

        $user = factory(User::class)->create([

            'name' => 'Viktor',
            'surname' => 'Petrov',


        ]);


        // Retrieve formated name

         $formatedName = $user->FullName;



         $this->assertEquals('Viktor Petrov', $formatedName);




        // verify that name is formated

        //$this->assertTrue(true);
    }
}
