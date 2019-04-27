<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\User;
use Auth;

class CarController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$cars = Car::where('user', Auth::user()->id)->get();;
        return view('auto')->with('cars', $cars);
    }

    public function status(Request $request)
    {
    	$car = Car::find($request->carid);
    	if (Auth::User()->id == $car->user) {
    		$car->status = $request->status;
    		$car->save();
    	}
    	return redirect()->action('CarController@index');
    }

    public function add(Request $request)
    {
    	$this->validate($request, [
                    'brand' => 'required',
                    'model' => 'required',
                    'year' => 'required',
                    'number' => 'required',
                ]);
    	$car = new Car();
    	$car->user = Auth::User()->id;
    	$car->brand = $request->brand;
    	$car->model = $request->model;
    	$car->year = $request->year;
    	$car->number = $request->number;
    	$car->save();
    	return redirect()->action('CarController@index');
    }
}
