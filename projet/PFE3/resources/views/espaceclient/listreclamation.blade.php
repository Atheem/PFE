@extends('layouts.espaceC.master')
@section('title','List de Votre Reclamations')
@section('brand','List DE Reclamations')

@section('content')
<h1>Reclamations </h1>
<a href="{{ route('ajoutrec') }}" class="btn btn-success float-right"><i class="fas fa-plus"></i> Ajouter un reclamation </a>
@if (session('statusaj'))
<div class="alert alert-success">
    {{ session('statusaj') }}
</div>
@endif
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Agence</th>
        <th scope="col">Date de Reclamation</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
@foreach ($reclamations as $r)


      <tr>
        <th scope="row"> </th>
        <td>{{ $r->title_rec }}</td>
        <td>{{ $r->description_rec }}</td>
        <td>{{ $r->agence['name'] }}</td>
        <td>{{ $r->date_reclamation }}</td>
        <td>
{{ $r->status }}
        </td>
        <td>  <form action= "{{ url('/Client/Reclamations/'.$r->id) }}" method="post">

            {{ csrf_field()}}
            {{ method_field('DELETE')}}

        <button type="submit" class="btn btn-danger "><i class="fas fa-trash-alt"></i> </button>
        <a href="{{ url('/Client/Reclamations/'.$r->id.'/edit') }}"  class="btn btn-warning "><i class="fas fa-pencil-alt"></i></a>
    </form>


       </td>

      </tr>
      @endforeach
    </tbody>
  </table>
  <script>
    window.setTimeout(function() {
        $(".alert").fadeTo(200, 0).slideUp(200, function(){
            $(this).remove();
        });
    }, 4000);
    </script>
@endsection
