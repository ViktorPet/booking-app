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

        $hotels = $this->fR->getHotelsForHotelsPage();


        return view('frontend.hotels',['hotels'=> $hotels]);
    }

    public function hotel($id){

        $hotel = $this->fR->getHotel($id);


        return view('frontend.hotel-details' ,compact('hotel'));

    }

    public function room($id)
    {
        $room = $this->fR->getRoom($id);
        return view('frontend.room',['room'=>$room]);
    }
}
