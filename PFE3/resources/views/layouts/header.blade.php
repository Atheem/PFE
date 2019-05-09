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
            <div class="jrb_jrb">
                    <label>
                            <input type= "checkbox"><span class="menu">
                              <span class="hamburger"></span>
                            </span>

                            <ul>
                                    <li><a class="active " href="{{ route('index') }}">Accueil</a></li>
                                    <hr>
                                    <li><a class="" href="">Top Cars</a></li>
                                    <hr>
                                    <li><a class=""  href="{{ route('espaceagence') }}">Espace Agence</a></li>
                                    <hr>
                                    <li><a class="" href="{{ route('cataloge') }}">Catalogue</a></li>
                                    <hr>
                                    <li><a class=""href="">Contact</a></li>
                                    <hr>
                                    @guest
                            <li><a class=""href="{{ route('login') }}">Login</a></li>
                            @if (Route::has('register'))
                            <li><a class=""href="{{ route('register') }}">Register</a></li>
                            @endif
                            @else
                            <li >
                                <a   href="{{ route('espaceclient') }}" >
                                    <i class="far fa-user"></i>  {{ Auth::user()->name }}
                                </a>
                            </li>
                                <li >
                                    <a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                     <i class="fas fa-sign-out-alt"></i>   {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                                @endguest
                                </ul>

                          </label>
                        </div>
        <nav>
                <div class="topcorner_logo"><a href="index"><img class="logo" src="/Assets/Mango_logo.png" alt="Mango"></a></div>
                <div class="desktop_menu ">
                        <ul>
                            <li><a class="active " href="{{ route('index') }}">Accueil</a></li>
                            <li><a class="" href="">Top Cars</a></li>
                            <li><a class="" href="{{ route('espaceagence') }}">Espace Agence</a></li>
                            <li><a class=""href="">Catalogue</a></li>
                            <li><a class=""href="">Contact</a></li>
                            @guest
                            <li><a class=""href="{{ route('login') }}">Login</a></li>
                            @if (Route::has('register'))
                            <li><a class=""href="{{ route('register') }}">Register</a></li>
                            @endif
                            @else
                            <li >
                                <a   href="{{ route('espaceclient') }}" >
                                    <i class="far fa-user"></i>  {{ Auth::user()->name }}
                                </a>
                            </li>
                                <li >
                                    <a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                     <i class="fas fa-sign-out-alt"></i>   {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                                @endguest
                            {{-- <li class="">
                                <a id="" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="far fa-user"></i><span class="caret"></span>
                                </a>
                            </li>
                                <li  aria-labelledby="navbarDropdown">
                                    <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="fas fa-sign-out-alt">  {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li> --}}

                         {{-- @guest
                            <li><a class=""href="{{ route('login') }}">Login</a></li>
                            @if (Route::has('register'))
                            <li><a class=""href="{{ route('register') }}">Register</a></li>
                            @endif
                            @else

                            <li >
                                <a   href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="far fa-user"></i>  {{ Auth::user()->name }}
                                </a>
                            </li>
                                <li >
                                    <a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                     <i class="fas fa-sign-out-alt"></i>   {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>

                        @endguest --}}


                            {{-- {{ @guest
                            <li ><a class="sign " href="{{ route('login') }}">Sign in</a></li>
                            @if (Route::has('register'))
                            <li ><a class="sign " href="{{ route('login') }}">Sign up</a></li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class=" nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class=" dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest --}}

                        </ul>
                      </div>
        </nav>
        </header>
