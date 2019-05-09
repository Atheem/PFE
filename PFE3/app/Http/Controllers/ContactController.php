<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    //
    public function store(Request $req)
    {
            $this->validate($req,[
                'mainName'=> 'required',
                'clientSubject'=>'required',
                'clientMail'=>'required|email',
                'clientMessage'=>'required'
            ]);

        // Mail::send('emails.contact-message',[
        //     'msg'=>$req->clientMessage
        // ],function($mail) use($req){
        //     $mail->from($req->clientMail, $req->mainName);
        //     $mail->to('mangopango2019@gmail.com')->subject($req->clientSubject);
        // });
        // return redirect()->route('index')->with('flash_message','Thank you for message');
    }
}
