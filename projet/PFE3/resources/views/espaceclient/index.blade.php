@extends('layouts.espaceC.master')
@section('title','ESPACE Client')

@section('content')
<div class="card mb-3">
        <img class="card-img-top" src="/Assets/clients.jpg" alt="Card image cap" style="width: 100%;height: 241px;">
        <div class="card-body">
          <h5 class="card-title">Espace Clinet</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

        </div>
      </div>
      <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="/Assets/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Profile Client</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                <a href="" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="/Assets/3.jpg" alt="Card image cap" style="width: 433px;height: 292px;">
              <div class="card-body">
                <h5 class="card-title">Reservations </h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                <a href="" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="/Assets/4.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Reclamtaions</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                <a href="" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
          </div>
@endsection
