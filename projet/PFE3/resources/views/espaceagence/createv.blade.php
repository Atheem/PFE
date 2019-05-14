@extends('layouts.espaceA.master')

@section('title','Géstion de Voitures')
@section('brand','Ajouter une Voiture')
@section('content')
<div class="row">

    <div class="col">
      <div class="card card-user">
        <div class="card-header">
          <h5 class="card-title">Ajouter une Voiture</h5>
        </div>
        <div class="card-body">
          <form action="{{ route('storev') }}" method="POST" enctype="multipart/form-data">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="row">
                  <div class="col-md-6 pr-1">
                    <div class="form-group">
                      <label>Immatriculation</label>
                      <input type="text" name="im" class="form-control" placeholder="AA-12345" value="" >
                    </div>
                  </div>

                  <div class="col-md-6 pl-1">
                    <div class="form-group">
                      <label >Marque</label>
                      <input type="text"name="mar" class="form-control" placeholder="EX:Renault">
                    </div>
                  </div>
                </div>
            <div class="row">
              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>Model</label>
                  <input type="text"  name="mod" class="form-control" placeholder="EX:Clio 5" value="">
                </div>
              </div>

              <div class="col-md-6 pl-1">
                <div class="form-group">
                  <label >Genre</label>
                  <select class="form-control" name="gen" >
                    <option value="" selected>-- SELECTIONNER UN GENRE--</option>
                    <option value="Berlines">Berlines</option>
                    <option value="4x4">4x4</option>
                    <option value="Break">Break</option>
                    <option value="Pick up">Pick up</option>
                  </select>

                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 pl-1">
                <div class="form-group">
                  <label>Type de Carburant</label>
                  <select class="form-control" name="typc" >
                        <option value="" selected>-- SELECTIONNER LE TYPE DE FUEL--</option>
                        <option value="Gasoline">Gasoline</option>
                        <option value="Diesel">Diesel</option>
                      </select>
                </div>
              </div>
              <div class="col-md-6 pr-1">
                    <div class="form-group">
                      <label>Mise encirculation</label>
                      <input type="DATE" name="mie" class="form-control"  >
                    </div>
                  </div>
            </div>
            <div class="row">
              <div class="col-md-6 pl-1">
                <div class="form-group">
                  <label>Exp assurance</label>
                  <input type="date" class="form-control"  name="exa" value="">
                </div>
              </div>

              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>Exp visit</label>
                  <input type="date" class="form-control"  name="exv">
                </div>
              </div>

            </div>
            <div class="row">
                    <div class="col-md-6 pr-1">
                            <div class="form-group">
                              <label>Exp autoris</label>
                              <input type="date" class="form-control"  name="ea">
                            </div>
                          </div>
              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>Prix Par Jour</label>
                  <input type="text" class="form-control"  placeholder="EX:300DH" value="" name="ppj">
                </div>
              </div>

            </div>
            <div class="row">
                    <div class="col-md-6 pr-1">
                            <div class="form-group">
                              <label>Photo</label>
                              <input type="file" class="form-control-file" name="photo" >
                            </div>
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
