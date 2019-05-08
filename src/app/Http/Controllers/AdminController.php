<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\News;
use App\Ticket;
use App\Message;
use Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	if (Auth::user()->accaunt_type == 2)
    	{
    		return view('admin');
    	}
    	else
    	{
    		return redirect()->action('HomeController@index');
    	}
        
    }

    public function users()
    {
    	if (Auth::user()->accaunt_type == 2)
    	{
    		$users = User::all();
    		return view('admin_users')->with('users', $users);
    	}
    	else
    	{
    		return redirect()->action('HomeController@index');
    	}
        
    }

    public function support()
    {
    	if (Auth::user()->accaunt_type == 2)
    	{
    		$tickets = Ticket::where('status', 1)->orderBy('id','desc')->get();
    		return view('admin_support')->with('tickets', $tickets);
    	}
    	else
    	{
    		return redirect()->action('HomeController@index');
    	}
        
    }

    public function news()
    {
    	if (Auth::user()->accaunt_type == 2)
    	{
    		return view('admin_news');
    	}
    	else
    	{
    		return redirect()->action('HomeController@index');
    	}
        
    }

    public function addNews(Request $request)
    {
    	if (Auth::user()->accaunt_type == 2)
    	{
    		$this->validate($request, [
                    'title' => 'required',
                    'text' => 'required'
                ]);
    		$new = new News();
    		$new->title = $request->title;
    		$new->text = $request->text;
    		$new->user = Auth::user()->id;
    		$new->save();
    		return view('admin_news');
    	}
    	else
    	{
    		return redirect()->action('HomeController@index');
    	}
        
    }

    public function openTicket(Request $request)
    {
    	if (Auth::user()->accaunt_type == 2)
    	{
    		$ticket = Ticket::find($request->id);
    		$messages = Message::where('ticket', $request->id)->get();
    		return view('admin_ticket')->with('ticket', $ticket)->with('messages', $messages);
    	}
    	else
    	{
    		return redirect()->action('HomeController@index');
    	}
    }

    public function addMessage(Request $request)
    {
    	if (Auth::user()->accaunt_type == 2)
    	{
    		$this->validate($request, [
                    'text' => 'required'
                ]);
    		$ticket = Ticket::find($request->id);
    		$message = new Message();
    		$message->user = Auth::user()->id;
			$message->text = $request->text;
			$message->ticket = $request->id;
			$message->save();
			$messages = Message::where('ticket', $request->id)->get();
    		return view('admin_ticket')->with('ticket', $ticket)->with('messages', $messages);
    	}
    	else
    	{
    		return redirect()->action('HomeController@index');
    	}
    }
}
