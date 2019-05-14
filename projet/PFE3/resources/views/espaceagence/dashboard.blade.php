@extends('layouts.espaceA.master')
@section('title','Espace Agence')
@section('content')
<div class="card mb-3">
        <img class="card-img-top" src="/Assets/ban-marrakech.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Espace Agence</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

        </div>
      </div>
<div class="container">
       <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="/Assets/1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Voitures</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <a href="{{ route('gestvoiture') }}" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="/Assets/2.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Profile</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <a href="{{ route('profilea') }}" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="/Assets/3.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Reservations</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. </p>
            <a href="{{ route('reserv') }}" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
</div>

@endsection
