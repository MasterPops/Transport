<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Hash;
use Storage;
use Illuminate\Http\File;

class EditUser extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('profile');
    }

    public function rename(Request $request)
    {
    	Auth::user()->lastname = $request->input('lastname');
    	Auth::user()->name = $request->input('name');
    	Auth::user()->patronymic = $request->input('patronymic');
    	Auth::user()->save();
    	return view('profile')->with('fioStatus', 'succes');
    }

    public function repass(Request $request)
    {
    	if (!empty($request->input('oldpass')) && !empty($request->input('newpass')) && !empty($request->input('newpassrepeat'))) 
    	{
    		if (Hash::check($request->input('oldpass'),Auth::user()->password)) 
    		{
    			if ($request->input('newpass')== $request->input('newpassrepeat')) 
    			{
    				Auth::user()->password = Hash::make($request->input('newpass'));
    				Auth::user()->save();
    				return view('profile')->with('passStatus', 'true');
    			}
    			else
    			{
    				return view('profile')->with('passStatus', 'newFalse');
    			}
    		}
    		else
    		{
    			return view('profile')->with('passStatus', 'oldFalse');
    		}
    	}
    	else
    	{
    		return view('profile')->with('passStatus', 'empty');
    	}
    }

    public function photo(Request $request)
    {
        $this->validate($request, [
                    'photo' => 'required|dimensions:max_width=1900,max_height=1900|image'
                ]);
        $ext = $request->photo->getClientOriginalExtension();
        Storage::putFileAs('public/UsersPhotos', $request->photo, Auth::user()->id.'.'.$ext);
        Auth::user()->img = urlencode(asset('storage/UsersPhotos/'.Auth::user()->id.'.'.$ext));
        Auth::user()->save();
        return redirect()->action('EditUser@index');
    }
}
