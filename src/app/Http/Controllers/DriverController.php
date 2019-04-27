<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Driver;
use App\Statuses_driver;
use Auth;

class DriverController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$drivers = Driver::where('user', Auth::user()->id)->get();
    	$statuses = Statuses_driver::all();
        return view('drivers')->with('drivers', $drivers)->with('statuses', $statuses);
    }

    public function status(Request $request)
    {
    	$driver = Driver::find($request->driverid);
    	if (Auth::User()->id == $driver->user) 
    	{
    		$driver->status = Statuses_driver::where('status',$request->status)->first()->id;;
    		$driver->save();
    	}
    	return redirect()->action('DriverController@index');
    }

    public function del(Request $request)
    {
    	$driver = Driver::find($request->driverid);
    	if (Auth::User()->id == $driver->user) 
    	{
    		$driver->delete();
    	}
    	return redirect()->action('DriverController@index');
    }

    public function add(Request $request)
    {
    	$this->validate($request, [
                    'name' => 'required',
                    'lastname' => 'required'
                ]);
    	$driver = new Driver();
    	$driver->user = Auth::User()->id;
    	$driver->name = $request->name;
    	$driver->lastname = $request->lastname;
    	$driver->patronymic = $request->patronymic;
    	$driver->save();
    	return redirect()->action('DriverController@index');
    }
}
