<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $messages = Message::latest('id')
        ->paginate(5);
        return view('list', [ 'messages'=>$messages ]);
    }

    public function create()
    {
        return view('create');
    }

    public function createProcess(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'subject'=>'required|max:255',
            'body' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
        }

        Message::create($input);

        return redirect('/')->with('success','Message Created Successfully');
    }

}
