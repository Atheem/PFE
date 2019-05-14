@extends('layouts.admin.master')
@section('title','Gestion Clients ')

@section('content')
<h1>Clients</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">CIN</th>
        <th scope="col">NumPassport</th>
        <th scope="col">Date Naissance</th>
        <th scope="col">Adresse</th>
        <th scope="col">TEL</th>
        <th scope="col">Permis</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($cls as $a)

            <tr>
        <th scope="row">{{$a->id}}</th>
        <td>{{ $a->name }}</td>
        <td>{{ $a->CIN }}</td>
        <td>{{ $a->NumPassport }}</td>
        <td>{{ $a->DateNais }}</td>
        <td>{{ $a->Adresse }}</td>
        <td>{{ $a->TEL }}</td>
        <td>{{ $a->Permis }}</td>
        <td>{{ $a->email }}</td>
        <td>
                <form action= "{{ url('/admin/client/'.$a->id) }}" method="post">

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
