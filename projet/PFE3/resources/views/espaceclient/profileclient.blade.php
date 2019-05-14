@extends('layouts.espaceC.master')

@section('title','Profile Client')
@section('brand','Profile de Client')
@section('content')
<div class="row">

    <div class="col">
      <div class="card card-user">
        <div class="card-header">
          <h5 class="card-title">Edit Profile Client</h5>
        </div>
        <div class="card-body">
            <h2 class="text-center">Sécurité et connexion</h2>
                <form action="{{ route('updatepass') }}" method="POST">
                    {!! csrf_field() !!}
                    <input type="hidden" name="_method" value="PUT">
                    @if (session('statuspass'))
    <div class="alert alert-success">
        {{ session('statuspass') }}
    </div>
@endif
               @if (session('error'))
               <div class="alert alert-danger">{{ session('error') }}</div>
              @endif
             <div class="row">

                 <div class="col-md-6 pr-1">
                   <div class="form-group">
                     <label>Old password</label>
                     <input type="password" name='oldpass' class="form-control" placeholder="Old password" value="" required>
                   </div>
                 </div>

                 <div class="col-md-6 pl-1">
                   <div class="form-group">
                     <label >New Passowrd</label>
                     <input type="password" name="password" class="form-control" placeholder="New password" required>
                   </div>
                 </div>
               </div>
               <div class="row">
                <div class="update ml-auto mr-auto">
                  <button type="submit" class="btn btn-primary btn-round">Modifier</button>
                </div>
              </div>
                </form>
        <br>

                <hr>
                <h2 class="text-center">Paramètres généraux du compte</h2>
          <form action="{{ route('updatec') }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
@foreach ($users as $u)


            <div class="row">
              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>Nom</label>
                  <input type="text" name="name" class="form-control"  value="{{ $u->name }}">
                </div>
              </div>

              <div class="col-md-6 pl-1">
                <div class="form-group">
                  <label >CIN</label>
                  <input type="text" name="cin" class="form-control" placeholder="EX:AA11111" value="{{ $u->CIN }}">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>N°Passport</label>
                  <input type="text" name="passport" class="form-control" placeholder="" value="{{ $u->NumPassport }}">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>Date de Naissence</label>
                  <input type="date" name="daten" class="form-control" value="{{ $u->DateNais }}">
                </div>
              </div>

              <div class="col-md-6 pl-1">
                <div class="form-group">
                  <label>Numéro de Télephone</label>
                  <input type="text" name='tel' class="form-control" placeholder="Télephone" value="{{ $u->TEL }}">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Adresse</label>
                  <input type="text" name='adresse' class="form-control"  value="{{$u->Adresse }}">
                </div>
              </div>
            </div>
            <div class="row">

                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Permis</label>
                    <select name="permis" class="form-control" >
                        <option value="{{ $u->Permis }}" selected>{{ $u->Permis }}</option>
                        <option value="A1" >A1</option>
                        <option value="A2" >A2</option>
                        <option value="B" >B</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-6 pl-1">
                  <div class="form-group">
                    <label for="">Date Permis</label>
                    <input type="date" name="datep" class="form-control" value="{{ $u->Date_Permis  }}" >
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>EMAIL</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $u->email }}">
                  </div>
                </div>
              </div>
            <div class="row">
              <div class="update ml-auto mr-auto">
                <button type="submit" class="btn btn-primary btn-round">Update Profile</button>
              </div>
            </div>
            @endforeach
          </form>

        </div>
      </div>
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
