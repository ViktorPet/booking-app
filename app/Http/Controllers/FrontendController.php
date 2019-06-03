<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;
use App\Photo;
use App\City;
use App\Room;
use App\Booking\Interfaces\FrontendRepositoryInterface;
use Illuminate\Support\Facades\DB;


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

        $single = Hotel::find($id)->rooms()->where('type','Single')->first();

        $double = Hotel::find($id)->rooms()->where('type','Double')->first();

        $apartment= Hotel::find($id)->rooms()->where('type','Apartment')->first();


       // dd($single);

        return view('frontend.hotel-details' ,
            [
                'hotel'=> $hotel,
                'single' => $single,
                'double' => $double,
                'apartment' => $apartment
        ]);

    }

    public function room($id)

    {



       // $room = DB::table('rooms')->find($id);

        $room = Room::find($id);

        // dd($room);



       // $room = $this->fR->getRoomsForRoomsPage();
        //dd($room);
        return view('frontend.room', compact('room'));
    }
}
