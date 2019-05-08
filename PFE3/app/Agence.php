<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Agence extends Authenticatable
{
    use Notifiable;

    protected $guard = 'agence';

    protected $fillable = [
        'name', 'email', 'password','adresse','ville','tel'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

   public function voitures()
   {
       return $this->hasMany('App\Voiture');
   }

   public  function reclamations()
   {
       return $this->hasMany('App\Reclamation');
       }

}

