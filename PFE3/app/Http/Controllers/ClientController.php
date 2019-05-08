<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\User;
use  Auth;
use Hash;

class ClientController extends Controller
{
    //

    public function index()
    {
        return view('espaceclient.index');
    }


    public function profile()
    {
        $users = User::where('id',Auth::user()->id)->get();
        return  view('espaceclient.profileclient',compact('users'));
    }

    public function updatepass(Request $request)
    {
        $user =  User::findOrFail(Auth::user()->id);
        if(!Hash::check($request->input('oldpass'), $user->password))
        {
            return back()->withError('error :The specified password does not match the database password');
        }
        else{
            $user->password =Hash::make($request->input('password'));
            $user->save();
            return redirect()->route('profileclient')->with('statuspass', 'Profile updated!');
        }
    }

    Public function  update(Request $request)
    {
        $user =  User::findOrFail(Auth::user()->id);


            $user->name =$request->input('name');
            $user->cin =$request->input('cin');
            $user->numpassport =$request->input('passport');
            $user->datenais =$request->input('daten');
            $user->tel =$request->input('tel');
            $user->adresse =$request->input('adresse');
            $user->permis =$request->input('permis');
            $user->Date_Permis =$request->input('datep');
            $user->email =$request->input('email');
            $user->save();
            return redirect()->route('profileclient')->with('status', 'Profile updated!');
        }


        public  function listreserv()
        {
            return  view('espaceclient.listreserv');
        }
    }

