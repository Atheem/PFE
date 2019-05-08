@extends('layouts.espaceA.master')

@section('title','Géstion de Voitures')
@section('brand','Géstion de Voitures')
@section('content')
<div class="row">
    <div class="col-md-12">
            @if (session('statusaj'))
            <div class="alert alert-success">
                {{ session('statusaj') }}
            </div>
            @endif
        <a href="{{ route('createcar') }}" class="btn btn-success float-right"><i class="fas fa-plus"></i> Add</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Immatriculation</th>
                <th scope="col">Marque</th>
                <th scope="col">Modele</th>
                <th scope="col">Fuel type</th>
                <th scope="col">Prix jour</th>
                <th scope="col">Photo</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($voitures as $voiture)
              <tr>
                <th scope="row">{{ $voiture->id }}</th>
                <td>{{ $voiture->immatriculation }}</td>
                <td>{{ $voiture->marque }}</td>
                <td>{{ $voiture->modele }}</td>
                <td>{{ $voiture->fuel_type }}</td>
                <td>{{ $voiture->prix_jour }}</td>
                <td><img src="{{ '/'.$voiture->path_pic }}" alt="" style="width:100px"></td>
                <td>
                        <form action="{{ url('/agence/Gestion-Voitures/'.$voiture->id)}}" method="post">

                            {{ csrf_field()}}
                            {{ method_field('DELETE')}}

                        <button type="submit" class="btn btn-danger "><i class="fas fa-trash-alt"></i> </button>
                        <a href="{{ url('/agence/Gestion-Voitures/'.$voiture->id.'/edit')}}"  class="btn btn-warning "><i class="fas fa-pencil-alt"></i></a>

                        </form>
                </td>
                @endforeach
              </tr>
            </tbody>
          </table>
    </div>
</div>
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(200, 0).slideUp(200, function(){
            $(this).remove();
        });
    }, 4000);
    </script>
@endsection
