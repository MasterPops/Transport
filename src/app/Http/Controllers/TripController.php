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
use App\Customer;
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
    	$cars = Car::where('user',Auth::user()->id)->get();
    	$cars = $cars->where('status', 1);
    	$drivers = Driver::where('user',Auth::user()->id)->get();
    	$drivers = $drivers->where('status', 1);
    	$customers = Customer::where('user',Auth::user()->id)->get();
        return view('trip')->with('trips', $trips)->with('cars', $cars)->with('drivers', $drivers)->with('customers', $customers);
    }    

    public function add(Request $request)
    {
    	$this->validate($request, [
                    'auto' => 'required',
                    'driver' => 'required',
                    'customer' => 'required',
                    'before' => 'required',
                    'price' => 'required'
                ]);
    	$trip = new Trip();
    	$trip->user = Auth::User()->id;
    	$driver->save();
    	return redirect()->action('DriverController@index');
    }
}
