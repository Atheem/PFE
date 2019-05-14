@extends('layouts.espaceA.master')

@section('title','Géstion de Voitures')
@section('brand','Modifier un Voiture')
@section('content')
<div class="row">

    <div class="col">
      <div class="card card-user">
        <div class="card-header">
          <h5 class="card-title">Modifier un Voiture</h5>
        </div>
        <div class="card-body">
          <form action="{{ url('/Agence/Gestion-Voitures/'.$voiture->id) }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">

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
                      <label>Immatriculation</label>
                      <input type="text" name="im" class="form-control" placeholder="AA-12345" value="{{ $voiture->immatriculation }}" >
                    </div>
                  </div>

                  <div class="col-md-6 pl-1">
                    <div class="form-group">
                      <label >Marque</label>
                      <input type="text"name="mar" class="form-control" placeholder="EX:Renault" value="{{ $voiture->marque }}">
                    </div>
                  </div>
                </div>
            <div class="row">
              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>Model</label>
                  <input type="text"  name="mod" class="form-control" placeholder="EX:Clio 5" value="{{ $voiture->modele }}">
                </div>
              </div>

              <div class="col-md-6 pl-1">
                <div class="form-group">
                  <label >Genre</label>
                  <select class="form-control" name="gen" >
                    <option  value="{{ $voiture->genre }}" selected>{{ $voiture->genre }}</option>
                    <option value="Berlines">Berlines</option>
                    <option value="4x4">4x4</option>
                    <option value="Break">Break</option>
                    <option value="Pick up">Pick up</option>
                  </select>

                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>Type de Carburant</label>
                  <select class="form-control" name="typc" >
                        <option value="{{ $voiture->fuel_type }}" selected>{{ $voiture->fuel_type }}</option>
                        <option value="Gasoline">Gasoline</option>
                        <option value="Diesel">Diesel</option>
                      </select>
                </div>
              </div>
              <div class="col-md-6 pl-1">
                    <div class="form-group">
                      <label>Mise encirculation</label>
                      <input type="DATE" name="mie" class="form-control"   value="{{ $voiture->mise_encirculation }}">
                    </div>
                  </div>
            </div>
            <div class="row">
              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>Date expiration d'assurance</label>
                  <input type="date" class="form-control"  name="exa"  value="{{ $voiture->exp_assurance }}">
                </div>
              </div>

              <div class="col-md-6 pl-1">
                <div class="form-group">
                  <label>Date expiration de visite technique</label>
                  <input type="date" class="form-control"  name="exv" value="{{ $voiture->exp_visit }}">
                </div>
              </div>

            </div>
            <div class="row">
                    <div class="col-md-6 pr-1">
                            <div class="form-group">
                              <label>Date expiration d'autorisation de circulation</label>
                              <input type="date" class="form-control"  name="ea" value="{{ $voiture->exp_autoris }}">
                            </div>
                          </div>
              <div class="col-md-6 pl-1">
                <div class="form-group">
                  <label>Prix Par Jour</label>
                  <input type="text" class="form-control"  placeholder="EX:300DH"  name="ppj" value="{{ $voiture->prix_jour }}">
                </div>
              </div>

            </div>


            <div class="row">
              <div class="update ml-auto mr-auto">
                <button type="submit" class="btn btn-primary btn-round">UPDATE</button>
              </div>
            </div>
          </form>

          <hr>
          <h2 class="text-center">Modifier Image de voiture</h2>
          <form action="{{ url('/Agence/Gestion-Voitures/Photo/'.$voiture->id) }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
			{{ csrf_field()}}

                <div class="row">
                        <div class="col-md-6 pr-1">
                                <div class="form-group">
                                  <label>Photo</label>
                                  <img src="{{ '/'.$voiture->path_pic }}" alt="" style="width:100px;hight:100px">
                                  <input type="file" class="form-control-file" name="photo" value="{{ $voiture->photo }}">
                                </div>
                              </div>
                        </div>
                        <div class="row">
                                <div class="update ml-auto mr-auto">
                                  <button type="submit" class="btn btn-primary btn-round">UPDATE</button>
                                </div>
                              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
