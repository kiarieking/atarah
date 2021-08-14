<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Mail\AtarahMail;
use Illuminate\Http\Request;
use App\Mail\AdminResponseMail;
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

    public function replyForm($id)
    {
        $message = Message::findOrFail($id);
        return view('admin.contact.reply_form', compact('message'));
    }

    public function deleteMessage($id)
    {
        $message = Message::findOrFail($id);
        $message->delete();

        return redirect()->route('admin_contact');
    }

    public function adminResponse(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $email = $request-> email;
        $message = $request->message;
        
        $maildata = [
            'title' => 'Response to your query',
            'url' => 'http://127.0.0.1:8000/home',
            'name' => $request->name,
            'message' => $message
        ];

        Mail::to($email) -> send(new AdminResponseMail($maildata));
        return redirect()->route('admin_contact');
    }
}
