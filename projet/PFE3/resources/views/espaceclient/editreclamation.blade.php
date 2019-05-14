@extends('layouts.espaceC.master')
@section('title','Modifier Reclamation ')
@section('brand','Modifier Reclamation')

@section('content')
<div class="row">

    <div class="col">
      <div class="card card-user">
        <div class="card-header">
          <h5 class="card-title">Reclamation</h5>
        </div>
        @foreach ($re as $r)
        <div class="card-body">
          <form action="{{ url('/Client/Reclamations/'.$r->id) }}"  method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">


            <div class="row">



              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>Titre de Reclamation </label>
                  <input type="text" name="title" class="form-control"  placeholder="" value="{{ $r->title_rec }}">
                </div>
              </div>

              <div class="col-md-6 pl-1">
                <div class="form-group">
                  <label for="">Agence</label>
                  <select name="agence" id="" class="form-control">
                        <option value="{{ $r->id_agence }}" selected>{{ $r->agence['name'] }}</option>
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

                  <textarea name="descript"  cols="30" rows="10" class="form-control">{{ $r->description_rec }}</textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Date de  reclamation </label>
                  <input type="date" class="form-control"  value="{{ $r->date_reclamation }}" name="dater">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="update ml-auto mr-auto">
                <button type="submit" class="btn btn-primary btn-round">Modifier</button>
              </div>
            </div>

          </form>
        </div>
        @endforeach
      </div>
    </div>
  </div>

@endsection
