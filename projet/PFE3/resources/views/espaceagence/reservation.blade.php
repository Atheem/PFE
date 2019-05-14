@extends('layouts.espaceA.master')

@section('title','Réservations')
@section('brand','Réservations')
@section('content')
<div class="row">
        <div class="">
                <h5 class="card-title">List des reservations</h5>
              </div>
    <div class="col-md-12">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">N°RESERV</th>
                <th scope="col">VOITURE</th>
                <th scope="col">IMMAT</th>

                <th scope="col">CLIENT</th>
                <th scope="col">DATE DEPART</th>
                <th scope="col">DATE RETOUR</th>
                <th> Nomber de jour </th>
                <th>Disponibilité</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
@foreach ($reserv as $r)


              <tr>
                <th scope="row"></th>
                <td>{{ $r->r }}</td>
                <td>{{$r->modele  }}</td>
                <td>{{$r->immatriculation  }}</td>

                <td>{{ $r->nom }}</td>
                <td>{{ $r->date_depart }}</td>
                <td>{{ $r->date_retour }}</td>
                <td>
                  @php
                  $rk =new DateTime($r->date_retour);
                  $dk =new DateTime($r->date_depart);
                      $days= date_diff($dk,$rk);
                     echo $days->format("%a Jour");;
                  @endphp
                </td>
                <td>
                    @if ($r->dispo ==0)
                    Disponible
                    @else
                            Indisponible
                    @endif
                </td>
                <td>
                  @if ($r->action == 0)
                  <form action="{{ url('/Agence/Reservation/'.$r->r) }}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field()}}
                        <button  class="btn btn-success">
                                Valider
                        </button>
                      </form>
                  @else
                      A ETE VALIDER
                  @endif
                </td>

              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
    <script>
            window.setTimeout(function() {
                $(".alert").fadeTo(200, 0).slideUp(200, function(){
                    $(this).remove();
                });
            }, 4000);
            </script>
</div>

@endsection
