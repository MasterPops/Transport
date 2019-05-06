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
                    'name' => 'required'
                ]);
    	$customer = new Customer();
    	$customer->user = Auth::User()->id;
    	$customer->name = $request->name;
    	$customer->save();
    	return redirect()->action('CustomerController@index');
    }

    public function del(Request $request)
    {
    	$customer = Customer::destroy($request->identify);
    	return redirect()->action('CustomerController@index');
    }
}
