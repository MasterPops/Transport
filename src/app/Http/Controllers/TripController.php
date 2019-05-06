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
    	$trips = Trip::where('user', Auth::user()->id)->orderBy('id','desc')->get();
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
    	$trip->driver = $request->driver;
    	$driver = Driver::find($request->driver);
    	$driver->status = 2;
    	$driver->save();
    	$trip->car = $request->auto;
    	$car = Car::find($request->auto);
    	$car->status = 2;
    	$car->save();
    	$trip->customer = $request->customer;
    	$trip->mileage_before = $request->before;
    	$trip->price = $request->price;
    	$trip->save();
    	return redirect()->action('TripController@index');
    }

    public function end(Request $request)
    {
    	$this->validate($request, [
                    'after' => 'required'
                ]);
    	$trip = Trip::find($request->identify);
    	$trip->mileage_after = $request->after;
    	$trip->sum = ($trip->mileage_after - $trip->before) * $trip->price;
    	$trip->status = 2;
    	$driver = Driver::find($trip->driver);
    	$driver->status = 1;
    	$driver->save();
    	$car = Car::find($trip->car);
    	$car->status = 1;
    	$car->save();
    	$trip->save();
    	return redirect()->action('TripController@index');
    }
}
