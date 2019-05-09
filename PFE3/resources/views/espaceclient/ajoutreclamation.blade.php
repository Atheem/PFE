@extends('layouts.espaceC.master')
@section('title','Nouvelle Reclamation ')
@section('brand','Nouvelle Reclamation')

@section('content')
<div class="row">

    <div class="col">
      <div class="card card-user">
        <div class="card-header">
          <h5 class="card-title">Reclamation</h5>
        </div>
        <div class="card-body">
          <form action="{{ route('reccreate') }}"  method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>Titre de Reclamation </label>
                  <input type="text" name="title" class="form-control"  placeholder="" value="">
                </div>
              </div>

              <div class="col-md-6 pl-1">
                <div class="form-group">
                  <label for="">Agence</label>
                  <select name="agence" id="" class="form-control">
                        <option value="" selected>--Selectionner une Agence--</option>
                      @foreach ($agences as $a)

                      <option value="{{ $a->id }}">{{ $a->name }}</option>
                      @endforeach
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Description</label>

                  <textarea name="descript"  cols="30" rows="10" class="form-control"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Date de  reclamation </label>
                  <input type="date" class="form-control"  value="" name="dater">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="update ml-auto mr-auto">
                <button type="submit" class="btn btn-primary btn-round">Ajouter</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection
