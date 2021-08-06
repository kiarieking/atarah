<?php

namespace App\Http\Controllers;

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
        
        $data=array("name"=>$request->name, 'body'=>$request->message, 'msg'=>$request->message);
        Mail::send('emails.admin-message',$data, 
        function ($mail) use($request) {
            $mail->from($request->email, $request->name);
          
            $mail->to('kingara49@gmail.com',)->subject('Atarah Client Querry');
          
        });

        $to_name = "Kelvin kiarie";
        $to_email = $request->email;
        $data = array("name"=>$request->name, "body" => "Thank you for contacting Atarah Solutions. We'll get
        back to you shortly.");

        Mail::send("emails.contact-message", $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
            ->subject('Thank you for your message');
            $message->from("kingara49@gmail.com","Atarah Solutions");
        });

        return redirect()->back()->with('flash_message','We have received your message');
    }
}
