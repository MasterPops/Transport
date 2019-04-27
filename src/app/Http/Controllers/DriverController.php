<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Driver;
use Auth;

class DriverController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$drivers = Driver::where('user', Auth::user()->id)->get();;
        return view('drivers')->with('drivers', $drivers);
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
