@extends('layouts.admin.master')
@section('title','Boite de Messages ')

@section('content')
<h1>Message</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Sujet</th>
        <th scope="col">Email</th>
        <th scope="col">Message</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($m as $a)

            <tr>
        <th scope="row"></th>
        <td>{{ $a->name }}</td>
        <td>{{ $a->sujet }}</td>
        <td>{{ $a->email }}</td>
        <td>{{ $a->message }}</td>
        <td>

                    <a href="{{ url('/admin/Message/'.$a->id) }}" class="btn btn-info"><i class="fas fa-reply"></i> </a>

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection
