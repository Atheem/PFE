<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voiture;
use App\User;
use App\Reservation;
use Auth;
class ReservationController extends Controller
{
    //
    public function __construct()
{
    $this->middleware('auth');
}

    public function details($id)
    {
        $details = User::where('id',Auth::user()->id)->get();
        $voiture = Voiture::where('id',$id)->get();
        return view('frontend.reservation',compact('details','voiture'));
    }

    public function store(Request $request)
    {
        $c= $this->validate($request,[
            'nom'                        => 'required',
            'cin'                        => 'required',
            'birthday'                        => 'required',
            'addresse'                        => 'required',
            'tel'                        => 'required',
            'email'                        => 'required',
            'permis'                        => 'required',
            'permi_date'                        => 'required',
         ]);

         if ($c)
         {
            $user =  User::findOrFail(Auth::user()->id);
            $b =strtotime($request->input('birthday'));
            $dp =strtotime($request->input('permi_date'));
            $dd =strtotime($request->input('depart'));
            $dr=strtotime($request->input('retour'));


            $user->name =$request->input('nom');
            $user->cin =$request->input('cin');
            $user->datenais = date('Y-m-d', $b );
            $user->tel =$request->input('tel');
            $user->adresse =$request->input('addresse');
            $user->permis =$request->input('permis');
            $user->Date_Permis =date('Y-m-d',$dp);
            $user->email =$request->input('email');
            $user->save();
            $reservation = new Reservation();
            $reservation->date_depart = date('Y-m-d', $dd);
            $reservation->date_retour= date('Y-m-d', $dr);
            $reservation->id_voiture=$request->input('v');
            $reservation->id_client = Auth::user()->id;
            $reservation->save();
            return redirect()->route('cataloge')->with('status', 'Reservation valider');
         }
         else{
         $r =$this->validate($request,[
            'depart'                        => 'required',
            'retour'                        => 'required',

         ]);

         $reservation = new Reservation();
         $reservation->date_depart =$request->input('depart');
         $reservation->date_retour=$request->input('retour');
         $reservation->save();
         return redirect()->route('cataloge')->with('status', 'Reservation valider');
         }
    }
}
