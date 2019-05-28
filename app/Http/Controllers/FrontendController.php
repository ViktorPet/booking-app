<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;
use App\Photo;
use App\City;
use App\Booking\Interfaces\FrontendRepositoryInterface;


class FrontendController extends Controller
{
    public function __construct(FrontendRepositoryInterface $frontendRepository)
    {
        $this->fR = $frontendRepository;
    }



    public function home()
    {
       $hotels = $this->fR->getHotelsForMainPage();

       // $motels = Hotel::all();
       // dd($hotels);
        return view('frontend.index', ['hotels'=> $hotels]);
    }

    public function show(){

        $hotels = $this->fR->getHotelsForMainPage();
       // $hotels = Hotel::all();

        return view('frontend.hotels',['hotels'=> $hotels]);
    }
}
