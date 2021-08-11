<?php

namespace App\Http\Controllers;

use App\Mail\AtarahMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        
        $email = $request -> email;
        $sender = 'kingara49@gmail.com';

        $maildata = [
            'title' => 'Atarah Solutions Customer Service',
            'url' => 'http://127.0.0.1:8000/home'
        ];

        Mail::to($email) -> send(new AtarahMail($maildata));

        


        return redirect()->back()->with('flash_message','We have received your message');


    }
}
