<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Auth;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$customers = Customer::where('user', Auth::user()->id)->get();
        return view('customers')->with('customers', $customers);
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
