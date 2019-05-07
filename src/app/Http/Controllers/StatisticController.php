<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;
use Auth;

class StatisticController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$trips = Trip::where('user', Auth::user()->id)->whereYear('created_at', date ( 'Y' ))->whereMonth('created_at', date ( 'm' ))->get();
        return view('statistic')->with('sum', $trips->sum('sum'))->with('km', $trips->sum('mileage_after')-$trips->where('status',2)->sum('mileage_before'))->with('count', $trips->where('status',2)->count());
    }
}
