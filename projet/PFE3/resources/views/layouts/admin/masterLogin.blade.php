<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/mat.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <title>MANGO FOR RENTAL CARS &reg;</title>
    </head>


<body>
    <header class="header_masterpage">

                <div class="topcorner_logo"><a href="index"><img class="logo" src="/Assets/Mango_logo.png" alt="Mango"></a></div>
                <div class="desktop_menu ">
                    <ul>
                        <li><a class="active " href=""><i class="fas fa-crown"></i> Admin Espace</a></li>
                        <li><a class=" " href="{{ route('index') }}"><i class="fas fa-home"></i> Site</a></li>
                    </ul>
                </div>
        </header>


<div class="">
@yield('content')
</div>
