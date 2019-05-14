<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Message;
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

            $m = new Message();
            $m->name=$req->input('mainName');
            $m->sujet=$req->input('clientSubject');
            $m->email=$req->input('clientMail');
            $m->message=$req->input('clientMessage');

            $m->save();
            return redirect()->route('index');

        // Mail::send('emails.contact-message',[
        //     'msg'=>$req->clientMessage
        // ],function($mail) use($req){
        //     $mail->from($req->clientMail, $req->mainName);
        //     $mail->to('mangopango2019@gmail.com')->subject($req->clientSubject);
        // });
        // return redirect()->route('index')->with('flash_message','Thank you for message');
    }
}
