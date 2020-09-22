<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function view($id)
    {
        $message = Message::findOrFail($id);
        if(!$message->readDate){
            $message->update(['readDate' => now()]);
        }
        return view('view', ['message' => $message]);
    }

    public function archive($id)
    {
        $message = Message::findOrFail($id);
        if(!$message->archivedDate){
            $message->update(['archivedDate' => now()]);
        }
        return redirect()->back();
    }

    public function list()
    {
        $messages = Message::all();
        return view('list', [ 'messages'=>$messages ]);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'subject'=>'required',
            'body' => 'required'
         ]);
        return view('create');
    }
}
