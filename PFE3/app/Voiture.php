<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    //
    protected $fillable = [
        'path_pic',
    ];
    public function agence()
    {
        return $this->belongsTo('App\Agence','location_id');
    }
}
