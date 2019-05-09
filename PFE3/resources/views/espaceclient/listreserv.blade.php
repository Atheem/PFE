@extends('layouts.espaceC.master')
@section('title','List de Voter Reservation')


@section('content')

<table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">N°</th>
            <th scope="col">AGENCE</th>
            <th scope="col">MODELE</th>
            <th scope="col">IMMAT</th>
            <th scope="col">DATE DEPART </th>
            <th scope="col">DATE RETOUR</th>
            <th scope="col">NOMBER DE JOUR</th>
            <th scope="col">ACTION</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($clients as $c)


          <tr>
            <th scope="row"> </th>
            <td>{{ $c->id }}</td>
            <td>{{ $c->name }}</td>
            <td>{{ $c->modele }}</td>
            <td>{{ $c->immatriculation }}</td>
            <td>{{ $c->date_depart }}</td>
            <td>{{ $c->date_retour }}</td>
            <td>
                @php
                $rk =new DateTime($c->date_retour);
                $dk =new DateTime($c->date_depart);
                    $days= date_diff($dk,$rk);
                   echo $days->format("%a Jour");;
                @endphp
            </td>
            <td>
                @if ($c->action == 1)
                <a href="" class="btn btn-info"><i class="fas fa-print"></i></a>
                                @else
                                pas encore accepte votre reservation
                @endif
            </td>

          </tr>
          @endforeach
        </tbody>
      </table>
@endsection
