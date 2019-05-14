@extends('layouts.admin.master')
@section('title','Gestion Agences ')

@section('content')
<h1>Agences</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Adresse</th>
        <th scope="col">Ville</th>
        <th scope="col">Tel</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($ags as $a)

            <tr>
        <th scope="row">{{$a->id}}</th>
        <td>{{ $a->name }}</td>
        <td>{{ $a->adresse }}</td>
        <td>{{ $a->ville }}</td>
        <td>{{ $a->tel }}</td>
        <td>{{ $a->email }}</td>
        <td>
                <form action= "{{ url('/admin/agence/'.$a->id) }}" method="post">

                    {{ csrf_field()}}
                    {{ method_field('DELETE')}}

                <button type="submit" class="btn btn-danger "><i class="fas fa-trash-alt"></i> </button>

            </form>

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection
