<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function view($id)
    {
        $message = Message::findOrFail($id);
        return view('view', ['message' => $message]);
    }

    public function list()
    {
        $messages = Message::all();
        return view('list', [ 'messages'=>$messages ]);
    }

    public function create()
    {
        return view('create');
    }
}
