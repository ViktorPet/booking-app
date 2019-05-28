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


class FrontendRepository implements FrontendRepositoryInterface  {


    public function getHotelsForMainPage()
    {
        return Hotel::with(['city','photos'])->get();
    }

}
