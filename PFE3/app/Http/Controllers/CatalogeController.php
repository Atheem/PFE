<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voiture;
use App\Agence;
class CatalogeController extends Controller
{
    //


    protected $limit =6;

 public  function cataloge()
 {
    $showData = Voiture::with('agence')->where('dispo',0)->Paginate($this->limit);
    return view('frontend.cataloge',['showData'=>$showData]);
 }
}
