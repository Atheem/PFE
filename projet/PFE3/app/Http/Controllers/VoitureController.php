<?php

namespace App\Http\Controllers;
use App\Agence;
use App\Voiture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use  Auth;
use File;
use App\Reservation;
use  DB;
use Hash;

class VoitureController extends Controller
{
    //
    public function viewall()
    {
        $voitures= Voiture::where('location_id',Auth::guard('agence')->user()->id)->get();
        return view('espaceagence.gestvoit',['voitures' => $voitures]);
    }

    public function profile()
    {
        $agences =Agence::where('id',Auth::guard('agence')->user()->id)->get();
        return view('espaceagence.profile',['agences' => $agences]);
    }


    public function Update(Request $request)
    {
        $agence=Agence::findOrFail(Auth::guard('agence')->user()->id);




        $agence->name = $request->input('namea');
        $agence->email=$request->input('email');
        $agence->adresse=$request->input('adress');
        $agence->ville=$request->input('city');
        $agence->tel=$request->input('tel');

        $agence->save();
        return redirect()->route('profilea')->with('statusa', 'Profile updated!');




    }

    public function updatepassa(Request $request)
    {
        $agence=Agence::findOrFail(Auth::guard('agence')->user()->id);


        if(!Hash::check($request->input('oldpass'), $agence->password))
        {
            return back()->withError('error :The specified password does not match the database password');
        }
        else {
            $agence->password=Hash::make($request->input('password'));
            $agence->save();
            return redirect()->route('profilea')->with('statuspassa', 'Profile updated!');
        }
    }

    public  function createcar()
    {
        return view('espaceagence.createv');
    }

    public function storecar(Request $request)
    {
       $val= $this->validate($request,[
            'im'                        => 'required',
            'mar'                        => 'required',
            'mod'                        => 'required',
            'gen'                        => 'required',
            'typc'                        => 'required',
            'mie'                        => 'required',
            'exa'                        => 'required',
            'exv'                        => 'required',
            'ea'                        => 'required',
            'ppj'                        => 'required|numeric',
            'photo'                        => 'image|max:1024',

         ]);


                $voiture= new Voiture();
                $voiture->immatriculation = $request->input('im');
                $voiture->marque = $request->input('mar');
                $voiture->modele = $request->input('mod');
                $voiture->genre = $request->input('gen');
                $voiture->fuel_type = $request->input('typc');
                $voiture->mise_encirculation = $request->input('mie');
                $voiture->exp_assurance = $request->input('exa');
                $voiture->exp_visit = $request->input('exv');
                $voiture->exp_autoris = $request->input('ea');
                $voiture->prix_jour = $request->input('ppj');
                $voiture->location_id=Auth::guard('agence')->user()->id;
               if ($request->hasFile('photo'))
               {
                   $filedb = time().$request->file('photo')->getClientOriginalName();




                   $path=$request->file('photo')->move('up/Agence '.Auth::guard('agence')->user()->name ,$filedb);
                   $voiture->photo=$filedb;

               }

               $voiture->path_pic='up/Agence '.Auth::guard('agence')->user()->name.'/'.$filedb;
                  $voiture->save();

                  return redirect()->route('gestvoiture')->with('statusaj', 'Voiture A BIEN AJOUTER');
    }

    public function destroy(Request $request,$id)
    {
        $voiture = Voiture::findOrFail($id);
        $path = '/up/Agence '.Auth::guard("agence")->user()->name .'/'.$voiture->photo;

        unlink($voiture->path_pic);
        $voiture->delete();
        return redirect()->route('gestvoiture');
    }


    public function editv($id){

    	$voiture =Voiture::findOrFail($id);

    	return view('espaceagence.editv',['voiture'=> $voiture]);

    }

    public function updatev(Request $request,$id)
    {
        $val= $this->validate($request,[
            'im'                        => 'required',
            'mar'                        => 'required',
            'mod'                        => 'required',
            'gen'                        => 'required',
            'typc'                        => 'required',
            'mie'                        => 'required',
            'exa'                        => 'required',
            'exv'                        => 'required',
            'ea'                        => 'required',
            'ppj'                        => 'required|numeric',


         ]);
         $voiture =Voiture::findOrFail($id);
         $voiture->immatriculation = $request->input('im');
         $voiture->marque = $request->input('mar');
         $voiture->modele = $request->input('mod');
         $voiture->genre = $request->input('gen');
         $voiture->fuel_type = $request->input('typc');
         $voiture->mise_encirculation = $request->input('mie');
         $voiture->exp_assurance = $request->input('exa');
         $voiture->exp_visit = $request->input('exv');
         $voiture->exp_autoris = $request->input('ea');
         $voiture->prix_jour = $request->input('ppj');

            $voiture->save();

            return redirect()->route('gestvoiture')->with('statusaj', 'Voiture A BIEN Modifier');
    }

    public function updateim(Request $request,$id)
    {
        $voiture =Voiture::findOrFail($id);
        $p = '/up/Agence '.Auth::guard("agence")->user()->name .'/'.$voiture->photo;
        if(file_exists($p))
        {
            unlink($voiture->path_pic);
        }
else{
        if ($request->hasFile('photo'))
        {
            $filedb = time().$request->file('photo')->getClientOriginalName();
           $path=$request->file('photo')->move('up/Agence '.Auth::guard('agence')->user()->name ,$filedb);
            $voiture->photo=$filedb;
            $voiture->path_pic="up/Agence ".Auth::guard('agence')->user()->name."/".$filedb;
            $voiture->save();
            return redirect()->route('gestvoiture')->with('statusaj', 'Voiture A BIEN Modifier');
        }
    }
    }
    public function reservation()
    {
        $reserv = DB::select('select reservations.id as r,modele,immatriculation,date_depart,date_retour,cin,users.name as nom,dispo,action from users join reservations on reservations.id_client=users.id join voitures on voitures.id=reservations.id_voiture join agences on agences.id=voitures.location_id where agences.id in (select location_id from voitures  where  location_id=?)',[Auth::guard('agence')->user()->id]);
        return view('espaceagence.reservation',compact('reserv'));
    }
    public function editaction($id)
    {
        $r = Reservation::findOrFail($id);
        $r->action=true;
        $r->save();
        return redirect()->route('reserv')->with('status', 'Agence a ete valider');
    }
}
