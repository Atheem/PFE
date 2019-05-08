@extends('layouts.espaceA.master')

@section('title','Réservations')
@section('brand','Réservations')
@section('content')
<div class="row">
        <div class="">
                <h5 class="card-title">List des reservations</h5>
              </div>
    <div class="col-md-12">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">N°RESERV</th>
                <th scope="col">VOITURE</th>
                <th scope="col">IMMAT</th>
                <th scope="col">CIN</th>
                <th scope="col">CLIENT</th>
                <th scope="col">DATE DEPART</th>
                <th scope="col">DATE RETOUR</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
@foreach ($reserv as $r)


              <tr>
                <th scope="row"></th>
                <td>{{ $r->num_contart }}</td>
                <td>{{$r->modele  }}</td>
                <td>{{$r->immatriculation  }}</td>
                <td>{{ $r->cin }}</td>
                <td>{{ $r->nom }}</td>
                <td>{{ $r->date_depart }}</td>
                <td>{{ $r->date_retour }}</td>

                <td>

                </td>

              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection
