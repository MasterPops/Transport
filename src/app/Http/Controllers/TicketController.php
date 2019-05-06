<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\Message;
use Auth;

class TicketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$tickets = Ticket::where('user', Auth::user()->id)->where('status', 1)->orderBy('id','desc')->get();
        return view('support')->with('tickets', $tickets)->with('line', 1);
    }

    public function end()
    {
    	$tickets = Ticket::where('user', Auth::user()->id)->where('status', 2)->get();
        return view('support')->with('tickets', $tickets)->with('line', 2);
    }

    public function add()
    {
    	$tickets = Ticket::where('user', Auth::user()->id)->where('status', 1)->get();
        return view('support')->with('line', 3);
    }    

    public function post(Request $request)
    {
    	$this->validate($request, [
                    'title' => 'required',
                    'text' => 'required'
                ]);
    	$ticket = new Ticket();
    	$ticket->user = Auth::user()->id;
    	$ticket->title = $request->title;
    	$ticket->text = $request->text;
    	$ticket->save();
        return redirect()->action('TicketController@index');
    }

    public function open(Request $request)
    {
    	$ticket = Ticket::find($request->id);
    	$messages = Message::where('ticket', $ticket->id)->get();
        return view('support')->with('line', 4)->with('ticket', $ticket)->with('messages', $messages);
    }

    public function postMess(Request $request)
    {
    	$this->validate($request, [
                    'text' => 'required'
                ]);
    	$message = new Message();
    	$message->user = Auth::user()->id;
    	$message->ticket = $request->id;
    	$message->text = $request->text;
    	$message->save();
        return redirect('support/ticket/'.$request->id);
    }

    public function close(Request $request)
    {
    	$ticket = Ticket::find($request->id);
    	$ticket->status = 2;
    	$ticket->save();
        return redirect()->action('TicketController@index');
    }
}

