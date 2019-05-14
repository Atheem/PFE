<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    //
    public function agence()
    {
        return $this->belongsTo('App\Agence','id_agence');
    }

    public function client()
    {
        return $this->belongsTo('App\User','id_client');
    }
}
