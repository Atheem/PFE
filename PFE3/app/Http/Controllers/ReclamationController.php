<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Reclamation;
use App\Agence;

use Auth;
class ReclamationController extends Controller
{
    //

    public function listreclam()
    {
        $user =Auth::user()->id;

        $reclamations  = Reclamation::with('agence')->where('id_client',$user)->get();
        return view('espaceclient.listreclamation',['reclamations'=>$reclamations]);
    }

    public  function ajoutrec()
    {
        $agences = Agence::all();
        return view('espaceclient.ajoutreclamation',compact('agences'));
    }


    public  function reccreate(Request $request )
    {
        $val= $this->validate($request,[
            'title'                        => 'required',
            'agence'                        => 'required',
            'descript'                        => 'required',
            'dater'                        => 'required',
         ]);

         $reclamaion = new Reclamation();
         $reclamaion->title_rec=$request->input('title');
         $reclamaion->id_agence=$request->input('agence');
         $reclamaion->id_client=Auth::user()->id;
         $reclamaion->description_rec=$request->input('descript');
         $reclamaion->date_reclamation=$request->input('dater');
         $reclamaion->save();
         return redirect()->route('listreclam')->with('status', 'Voter reclamation a ete envoyer');
    }

    public  function viewrec()
    {
        $reclamations = Reclamation::with('client')->where('id_agence',Auth::guard('agence')->user()->id)->get();
        return view('espaceagence.listreclam',compact('reclamations'));
    }


    public function updatestatus(Request $request, $id)
    {
        $reclamaion = Reclamation::findOrFail($id);
        $reclamaion->status='reglee';
        $reclamaion->save();
        return redirect()->route('viewrec')->with('status', 'Voter reclamation a ete envoyer');
    }
    public function destroy(Request $request,$id)
    {
        $re = Reclamation::findOrFail($id);

        $re->delete();
        return redirect()->route('listreclam');
    }


    public function editreclam($id)
    {
        $re  = Reclamation::with('agence')->where('id',$id)->get();
        $aganeces = Agence::all();
        return view('espaceclient.editreclamation',['re'=>$re,'agences'=>$aganeces]);
    }



    public  function updatereclam(Request $req,$id)
    {
            $re=Reclamation::findOrFail($id);
            $re->title_rec=$req->input('title');
            $re->id_agence=$req->input('agence');
            $re->description_rec=$req->input('descript');
            $re->date_reclamation=$req->input('dater');
            $re->save();
            return  redirect()->route('listreclam')->with('statusaj', 'Reclamation A BIEN Modifier');
    }
}
