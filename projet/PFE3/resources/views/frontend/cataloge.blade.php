@extends('layouts.master')

@section('content')
<section class="cataloge_bg">

    <h1>Mango
        <br> Helps you to find the car you seek!
    </h1>
</section>
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
<section class="filter_search">
    <h1>All available cars</h1>
    <form action="{{ route('search') }}" method="POST">
            {{ csrf_field()}}
            <div class="search">
                    <div class="dropdown2">
                        <select name="agence">
                            <option value="" selected disabled hidden>Agency</option>
                            @foreach ($agence as $a)
                            <option value="{{ $a->name }}">{{ $a->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="dropdown3">
                        <select name="brand">
                            <option value="" selected disabled hidden>Brand</option>
                            @foreach ($b as $m)

                            <option value="{{ $m->marque }}">{{ $m->marque }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="dropdown4">
                        <select name="modele">
                            <option value="" selected disabled hidden>Model</option>
                           @foreach ($modele as $md)
                            <option value="{{ $md->modele }}">{{ $md->modele }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="search_btn1">
                        <button type="submit" class="search_btn">Search</button>

                    </div>

                </div>
    </form>


    <div class="container">

        <div class="row">
                @foreach($showData as $sd)

            <div class="col-sm-6 col-lg-4 qizm">
                                <!-- Card Flip -->
                                <div class="card-flip">
                                    <div class="flip">
                                        <div class="front">
                                            <!-- front content -->
                                            <div class="card">
                                                <img src="{{ '/'.$sd->path_pic }}" class="card-img-top " style="width:283px; height:182px;"  >
                                                <div class="card-block">
                                                    <h4 class="card-title text-center">
                                                        <label >{{ $sd->marque }}
                                                                                    </label>
                                    <label for="">{{ $sd->modele }}</label>
                                        </h4>
                                                    <ul>

                                                        <li>Genre: <label>{{ $sd->genre }}</label></li>
                                                        <li>Immatrucilation: <label>{{ $sd->immatriculation }}</label></li>
                                                        <li>Fuel type: <label>{{ $sd->fuel_type }}</label></li>
                                                        <li>Prix/Jour: <label>{{ $sd->prix_jour }} DH</label></li>
                                                    </ul>

                                                    <div class="rent_now">
                                                        <a href="" class="btn">Details</a>

                                                        <img src="Assets/more_details.svg" style="width:20px; height:20px;" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="back">
                                            <!-- back content -->
                                            <div class="card">


                                                <div class="card-block ">
                                                    <ul>
                                                        <li>Date mise en circulation: <label>>{{ $sd->mise_encirculation }}</label></li>
                                                        <li>Agence: <label>{{ $sd->agence['name'] }}</label></li>
                                                        <li>Addresse: <label>{{ $sd->agence['adresse'] }}</label></li>
                                                        <li>Email: <label>{{ $sd->agence['email'] }}</label></li>
                                                        <li>Télephone: <label>{{ $sd->agence['tel'] }}</label></li>
                                                    </ul>
                                                    <div class="rent_now">
                                                        <a href="{{ url('/Reservation/'.$sd->id) }}" class="btn">Réserver</a>

                                                        <img src="Assets/key.svg" style="width:30px; height:30px;" alt="">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Card Flip -->
                            </div>
            @endforeach

            <div style="margin:0 auto">
            {{ $showData->links() }}
        </div>
        </div>

    </div>

</section>

<script>
window.setTimeout(function() {
    $(".alert").fadeTo(200, 0).slideUp(200, function(){
        $(this).remove();
    });
}, 4000);
</script>

<style>
  .page-item.active .page-link {
    z-index: 1;
    color: #f83b01;
    background-color: #fff;
    border-color: #f83b01;
}
.page-link {

    color: #f83b08;

}
.page-link:hover {
    z-index: 2;
    color: #f83b08;
    text-decoration: none;
    background-color: #e9ecef;
    border-color: #f83b08;
}
</style>
@endsection
