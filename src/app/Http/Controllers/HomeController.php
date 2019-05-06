<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Car;
use App\Driver;
use App\Trip;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cars = Car::where('user', Auth::user()->id)->count();
        $drivers = Driver::where('user', Auth::user()->id)->count();
        $trips = Car::where('user', Auth::user()->id)->get();
        $trips = $trips->where('status', 2)->count();
        return view('home')->with('cars', $cars)->with('drivers', $drivers)->with('trips', $trips);
    }
}
