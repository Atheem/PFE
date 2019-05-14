<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Voiture;
use Auth;
use PDF;
use App\Reservation;
class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    protected $limit =6;
    public function index()
    {
        $c1 = Voiture::where('id',26)->get();
        $c2= Voiture::where('id',29)->get();
        $c3 = Voiture::where('id',30)->get();
      $c4 =Voiture::where('id',34)->get();
        $b =DB::select('select DISTINCT marque from voitures');
        $agence =DB::table('agences')->select('name')->get();
        $modele =DB::select('select DISTINCT modele from voitures');
        return view('frontend.index',compact('b','agence','modele','c1','c2','c3','c4'));
    }


    public function search(Request $req)
    {
        $b =DB::select('select DISTINCT marque from voitures');
        $agence =DB::table('agences')->select('name')->get();
        $modele =DB::select('select DISTINCT modele from voitures');
        $showData = DB::select('select 	voitures.id as id,immatriculation ,	marque, 	modele ,	genre ,	fuel_type ,	mise_encirculation ,	exp_assurance ,	exp_visit 	,exp_autoris ,	prix_jour ,	photo ,	path_pic , 	adresse,	name,	ville,	tel,	email from voitures join agences on agences.id=voitures.location_id WHERE agences.name=:n AND  voitures.marque = :m OR voitures.modele = :mod ', ['n'=>$req->input('agence'),'m'=>$req->input('brand'),'mod'=>$req->input('modele')]);   // Voiture::with('agence')->where('dispo',0)->orWhere(function($q) use ($req){ $q->where('marque',$req->input('brand'))->where('modele',$req->input('modele'));})->Paginate($this->limit);
        $s=DB::select('select count(*) as k from voitures join agences on agences.id=voitures.location_id WHERE agences.name=:n AND  voitures.marque = :m OR voitures.modele = :mod ', ['n'=>$req->input('agence'),'m'=>$req->input('brand'),'mod'=>$req->input('modele')]);   // Voiture::with('agence')->where('dispo',0)->orWhere(function($q) use ($req){ $q->where('marque',$req->input('brand'))->where('modele',$req->input('modele'));})->Paginate($this->limit);
        return view('frontend.search',['s'=>$s,'showData'=>$showData,'b'=>$b,'agence'=>$agence,'modele'=>$modele]);
  }


  public  function pdf($id)
  {

    $showData = DB::select('select prix_jour,reservations.id as id,date_reservation ,agences.name as name,voitures.modele as modele,voitures.marque,voitures.immatriculation as immatriculation,reservations.date_depart as date_depart ,reservations.date_retour as date_retour,prix_jour ,action from  reservations join voitures on voitures.id= reservations.id_voiture join agences on agences.id=voitures.location_id where reservations.id=?',[$id]);

    foreach ($showData as $s) {
        # code...
        $data =['id'=>$id,'client'=>Auth::user()->name,'mq'=>$s->marque,'name'=>$s->name,'im'=>$s->immatriculation,'dater'=>$s->date_reservation,'mod'=>$s->modele,'dd'=>$s->date_depart,'dr'=>$s->date_retour,'prixj'=>$s->prix_jour];
        $pdf =PDF::loadView('Invoice',$data);
        // return $pdf->download('Recupdf.pdf');
        return $pdf->stream();
    }
  }

  public function topcars()
  {
      $c1 = Voiture::where('id',26)->get();
      $c2= Voiture::where('id',29)->get();
      $c3 = Voiture::where('id',30)->get();
    $c4 =Voiture::where('id',34)->get();
      return view('frontend.topcars',compact('c1','c2','c3','c4'));
  }


  public function contact()
  {
      return view('frontend.contact');
  }


}
