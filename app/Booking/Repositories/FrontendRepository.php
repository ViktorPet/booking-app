<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 5/23/2019
 * Time: 7:30 AM
 */

namespace App\Booking\Repositories;

use App\Booking\Interfaces\FrontendRepositoryInterface;

use App\Hotel;
use App\Room;
use Illuminate\Support\Facades\DB;


class FrontendRepository implements FrontendRepositoryInterface  {


    public function getHotelsForMainPage()
    {
        return Hotel::with(['city','photos'])->where('hot', 1)->get();
    }

    public function getHotelsForHotelsPage()
    {
        return Hotel::with(['city','photos'])->get();
    }

    public function getHotel($id)
    {
        return Hotel::find($id);
    }

    public function getRoom($id)
    {
        // with - for mobile json
        return Room::find($id) ;

    }



}
