<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Driver;
use App\Car;
use App\Trip;
use App\Statuses_driver;
use App\Statuses_car;
use App\Statuses_trip;
use Auth;

class TripController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$trips = Trip::where('user', Auth::user()->id)->get();
        return view('trip')->with('trips', $trips);
    }    
}
