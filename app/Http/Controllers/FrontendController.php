<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;


class FrontendController extends Controller
{
    public function show(){

        $hotels = Hotel::all();

        return view('frontend/hotels', ['hotels'=> $hotels]);
    }
}
