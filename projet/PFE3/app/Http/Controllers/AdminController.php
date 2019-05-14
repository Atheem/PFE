<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agence;
use App\User;
use App\Message;
class AdminController extends Controller
{
    //
    public function viewagence()
    {
        $ags = Agence::all();
        return view('admin.agence',compact('ags'));
    }


    public function viewclient()
    {
        $cls =User::all();
        return view('admin.client',compact('cls'));
    }

    public function message()
    {
        $m =Message::all();
        return view('admin.message',compact('m'));
    }
    public function ev($id)
    {
        $m =Message::where('id',$id)->get();
        return view('admin.envoiM',compact('m'));
    }

    public function destroya($id)
    {
        $a = Agence::findOrFail($id);
        $a->delete();
        return redirect()->route('ags');
    }


    public function destroyc($id)
    {
        $a = User::findOrFail($id);
        $a->delete();
        return redirect()->route('cls');
    }
    public function send(Request $req)
    {

        // Mail::send('emails.reminder', ['user' => $user], function ($m) use ($user) {
        //     $m->from('hello@app.com', 'Your Application');

        //     $m->to($user->email, $user->name)->subject('Your Reminder!');
        // });
    }
}
