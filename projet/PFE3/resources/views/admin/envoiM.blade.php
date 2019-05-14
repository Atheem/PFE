@extends('layouts.admin.master')
@section('title','Boite de Messages ')

@section('content')

<h1>Message</h1>
<div class="card-body">
    <form>



      <div class="row">
        <div class="col-md-6 pr-1">
          <div class="form-group">
            <label>Nom </label>
            <input type="text" class="form-control"  placeholder="name" >
          </div>
        </div>

        <div class="col-md-6 pl-1">
          <div class="form-group">
            <label for="exampleInputEmail1">sujet</label>
            <input type="text" class="form-control" placeholder="sujet">
          </div>
        </div>
      </div>
@foreach ($m as $ms)


      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>Address Email</label>
            <input type="email" class="form-control" disabled="" placeholder="email" value="{{ $ms->email }}">
          </div>
        </div>
      </div>
      @endforeach
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>Message</label>
            <textarea class="form-control textarea">

            </textarea>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="update ml-auto mr-auto">
          <button type="submit" class="btn btn-primary btn-round">Envoyer</button>
        </div>
      </div>

    </form>
  </div>
@endsection
