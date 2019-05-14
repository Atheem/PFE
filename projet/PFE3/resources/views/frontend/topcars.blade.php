@extends('layouts.master')

@section('content')
<section class="top_bg">

    <h1>MOST SEARCHED CARS
    </h1>
</section>
<section class="top_cars">

<H1 style="text-align:center">Most searched cars</H1>
    <div class="container cars_container">
        <!-- 1st row -->
        <div class="row row1">
            <div class="col  car_card">
                @foreach ($c1 as $cc)


                <div class="car_img">
                    <img src="{{ '/'.$cc->path_pic }}" alt="">
                </div>
                <div class="car_info">
                    <div class="container">
                        <h4>{{ $cc->marque.' '.$cc->modele }}</h4>

                        <br>
                        <img src="Assets/star_colored.svg" alt="" style="width:20px; height:20px;">
                        <img src="Assets/star_colored.svg" alt="" style="width:20px; height:20px;">
                        <img src="Assets/star_colored.svg" alt="" style="width:20px; height:20px;">
                        <img src="Assets/star_colored.svg" alt="" style="width:20px; height:20px;">
                        <img src="Assets/star_colored.svg" alt="" style="width:20px; height:20px;"><br> <br>
                        <p class="price">Price/Day <br>{{ $cc->prix_jour }} DH</p>
                        <div class="rent_now">
                            <a href="{{ url('/Reservation/'.$cc->id) }}" class="btn">Rent now</a>

                            <img src="Assets/right-arrow.svg" style="width:20px; height:20px;" alt="">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col  car_card second">
                @foreach ($c2 as $cc)


                <div class="car_img">
                    <img src="{{ '/'.$cc->path_pic }}" alt="">
                </div>
                <div class="car_info">
                    <div class="container">
                        <h4>{{ $cc->marque.' '.$cc->modele }}</h4>
                        <span>Marrakech dwar l7rch</span>
                        <br>
                        <img src="Assets/star_colored.svg" alt="" style="width:20px; height:20px;">
                        <img src="Assets/star_colored.svg" alt="" style="width:20px; height:20px;">
                        <img src="Assets/star_colored.svg" alt="" style="width:20px; height:20px;">
                        <img src="Assets/star_colored.svg" alt="" style="width:20px; height:20px;">
                        <img src="Assets/star_colored.svg" alt="" style="width:20px; height:20px;"><br> <br>
                        <p class="price">Price/Day <br> {{ $cc->prix_jour }} DH</p>
                        <div class="rent_now">
                            <a href="{{ url('/Reservation/'.$cc->id) }}" class="btn">Rent now</a>

                            <img src="Assets/right-arrow.svg" style="width:20px; height:20px;" alt="">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- 2nd row -->
        <div class="row row2 ">
            <div class="col  car_card">
                @foreach ($c3 as $cc)


                <div class="car_img">
                        <img src="{{ '/'.$cc->path_pic }}" alt="">
                </div>
                <div class="car_info">
                    <div class="container">
                            <h4>{{ $cc->marque.' '.$cc->modele }}</h4>

                        <br>
                        <img src="Assets/star_colored.svg" alt="" style="width:20px; height:20px;">
                        <img src="Assets/star_colored.svg" alt="" style="width:20px; height:20px;">
                        <img src="Assets/star_colored.svg" alt="" style="width:20px; height:20px;">
                        <img src="Assets/star_colored.svg" alt="" style="width:20px; height:20px;">
                        <img src="Assets/star_colored.svg" alt="" style="width:20px; height:20px;"><br> <br>
                        <p class="price">Price/Day <br> {{ $cc->prix_jour }} DH</p>
                        <div class="rent_now">
                            <a href="{{ url('/Reservation/'.$cc->id) }}" class="btn">Rent now</a>

                            <img src="Assets/right-arrow.svg" style="width:20px; height:20px;" alt="">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col  car_card second">
                @foreach ($c4 as $cc)


                <div class="car_img">
                    <img src="{{ '/'.$cc->path_pic }}" alt="">
                </div>
                <div class="car_info">
                    <div class="container">
                            <h4>{{ $cc->marque.' '.$cc->modele }}</h4>

                        <br>
                        <img src="Assets/star_colored.svg" alt="" style="width:20px; height:20px;">
                        <img src="Assets/star_colored.svg" alt="" style="width:20px; height:20px;">
                        <img src="Assets/star_colored.svg" alt="" style="width:20px; height:20px;">
                        <img src="Assets/star_colored.svg" alt="" style="width:20px; height:20px;">
                        <img src="Assets/star_colored.svg" alt="" style="width:20px; height:20px;"><br> <br>
                        <p class="price">Price/Day <br> {{ $cc->prix_jour }} DH</p>
                        <div class="rent_now">
                            <a href="{{ url('/Reservation/'.$cc->id) }}" class="btn">Rent now</a>

                            <img src="Assets/right-arrow.svg" style="width:20px; height:20px;" alt="">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
