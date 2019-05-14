@extends('layouts.admin.master')
@section('title','Admin ')

@section('content')
<div class="card mb-3">
        <img class="card-img-top" src="\Assets\Image-1.png" alt="Card image cap" style="width: 100%;height: 368px;">
        <div class="card-body">
          <h5 class="card-title">Admin Espace</h5>
          <p class="card-text">Appliqué aux sites web dynamiques, le terme back office désigne l’interface permettant de gérer le contenu d’un site dynamique </p>

        </div>
      </div>
<div class="card text-center">

        <div class="card-body">
          <h5 class="card-title">Agences</h5>
          <p class="card-text">La location de voiture courte durée (LCD) ou location de véhicule est un service proposé par une entreprise offrant aux clients la location des automobiles pour de courtes périodes pouvant aller de quelques heures à quelques semaines. Les sociétés de location sont souvent constituées de nombreuses agences ...</p>
          <a href="{{ route('ags') }}" class="btn btn-primary">Go somewhere</a>
        </div>

      </div>

      <div class="card text-center">

            <div class="card-body">
              <h5 class="card-title">Client</h5>
              <p class="card-text">Un client, au sens économique, désigne la personne ou l'entité qui prend la décision d'acheter un bien ou service, de façon occasionnelle ou habituelle,</p>
              <a href="{{ route('cls') }}" class="btn btn-primary">Go somewhere</a>
            </div>

          </div>
@endsection
