<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\User;
use  Auth;
use DB;
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
          $clients=  DB::select('select reservations.id as id ,agences.name as name,voitures.modele as modele,voitures.immatriculation as immatriculation,reservations.date_depart as date_depart ,reservations.date_retour as date_retour,prix_jour ,action from users join reservations on reservations.id_client=users.id join voitures on voitures.id= reservations.id_voiture join agences on agences.id=voitures.location_id where users.id=?',[Auth::user()->id]);
            return  view('espaceclient.listreserv',compact('clients'));
        }
    }

