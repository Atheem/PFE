@extends('layouts.espaceA.master')

@section('title','Profile Agence')
@section('brand','Profile')
@section('content')
<div class="row">

    <div class="col">
      <div class="card card-user">
        <div class="card-header">
          <h5 class="card-title">Edit Profile Agence</h5>
        </div>
        <div class="card-body">

            <h2 class="text-center">Sécurité et connexion</h2>
            <form action="{{ route('updatepassa') }}" method="POST">
                {!! csrf_field() !!}
                <input type="hidden" name="_method" value="PUT">
                @if (session('statuspassa'))
          <div class="alert alert-success">
                 {{ session('statuspassa') }}
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
          <form action="{{ route('updatep') }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                @foreach ($agences as $a)
                @if (session('statusa'))
                <div class="alert alert-success">
                    {{ session('statusa') }}
                </div>
            @endif
                @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

            <div class="row">
              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>Nom d'agence</label>
                  <input type="text" name="namea" class="form-control"  placeholder="Company" value="{{ $a->name }}">
                </div>
              </div>

              <div class="col-md-6 pl-1">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $a->email }}">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" name="adress" class="form-control" placeholder="Home Address" value="{{ $a->adresse }}">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>City</label>
                  <input type="text" name="city" class="form-control" placeholder="City" value="{{ $a->ville }}">
                </div>
              </div>

              <div class="col-md-6 pl-1">
                <div class="form-group">
                  <label>Numéro de Télephone</label>
                  <input type="text" name='tel' class="form-control" placeholder="Télephone" value="{{ $a->tel }}">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Réglements</label>
                  <textarea class="form-control textarea">Mango pango dkali 3rrobi 3ouwa tibibt </textarea>
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
