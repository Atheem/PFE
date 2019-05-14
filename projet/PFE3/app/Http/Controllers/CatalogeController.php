<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voiture;
use App\Agence;
use DB;
class CatalogeController extends Controller
{
    //


    protected $limit =6;

 public  function cataloge()
 {
    $showData = Voiture::with('agence')->where('dispo',0)->Paginate($this->limit);
    $b =DB::select('select DISTINCT marque from voitures');
        $agence =DB::table('agences')->select('name')->get();
        $modele =DB::select('select DISTINCT modele from voitures');
    return view('frontend.cataloge',['showData'=>$showData,'b'=>$b,'agence'=>$agence,'modele'=>$modele]);
 }
}
