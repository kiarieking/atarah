<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Mail\AtarahMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        return view('admin.contact.contacts', compact('messages'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        
        // send an email to user
        $email = $request -> email;
        $sender = 'kingara49@gmail.com';

        $maildata = [
            'title' => 'Atarah Solutions Customer Service',
            'url' => 'http://127.0.0.1:8000/home'
        ];

        Mail::to($email) -> send(new AtarahMail($maildata));

        // save user query to db
        $message = new Message;

        $message->name = $request -> name;
        $message->email = $request -> email;
        $message->msg = $request -> message;

        $message -> save();
        
        return redirect()->back()->with('flash_message','We have received your message');

    }

    public function replyForm()
    {
        return view('admin.contact.reply_form');
    }
}
