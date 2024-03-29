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
    <header class="header_section">
            <div class="jrb_jrb">
                    <label>
                            <input type= "checkbox"><span class="menu">
                              <span class="hamburger"></span>
                            </span>

                            <ul>
                                <li><a class="active " href="{{ route('index') }}">Accueil</a></li>
                                <hr>
                                <li><a class="" href="{{ route('topcars') }}">Top Cars</a></li>
                                <hr>
                                <li><a class=""  href="{{ route('espaceagence') }}">Espace Agence</a></li>
                                <hr>
                                <li><a class="" href="{{ route('cataloge') }}">Catalogue</a></li>
                                <hr>
                                <li><a class=""href="{{ route('us') }}">Contact</a></li>
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
                        <li><a class="" href="{{ route('topcars') }}">Top Cars</a></li>
                        <li><a class="" href="{{ route('espaceagence') }}">Espace Agence</a></li>
                        <li><a class=""href="{{ route('cataloge') }}">Catalogue</a></li>
                        <li><a class=""href="{{ route('us') }}">Contact</a></li>
                        @guest
                        <li><a class=""href="{{ route('login') }}">Login</a></li>
                        @if (Route::has('register'))
                        <li><a class=""href="{{ route('register') }}">Register</a></li>
                        @endif
                        @else
                        <li >
                            <a   href="{{ route('espaceclient') }}"  >
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
                            {{-- @guest
                            <li ><a class="sign " href="{{ route('login') }}">Sign in</a></li>
                            @if (Route::has('register'))
                            <li ><a class="sign " href="{{ route('register') }}">Sign up</a></li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
        <h1>The Fastest way to rent a car</h1>
        <h3>Pick up a car easly with Mango</h3>
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
    </header>
    <section class="cards">

        <div class="container">
            <div class="row">

                <div class="col">
                    <div class="card mx-auto" style="width: 20rem;">
                        <img class="card-img-top" src="Assets/help.png" alt="">
                        <div class="card-body">
                            <p class="card-text">Extra Saad rmili and all other tweeties.</p>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mx-auto" style="width: 20rem;">
                        <img class="card-img-top" src="Assets/car.png" alt="">
                        <div class="card-body">

                            <p class="card-text">Extra Saad rmili and all other tweeties.</p>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mx-auto" style="width: 20rem;">
                        <img class="card-img-top" src="Assets/Layer 2.png" alt="">
                        <div class="card-body">

                            <p class="card-text">Extra Saad rmili and all other tweeties.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="top_cars">
        <h1>Top cars of the month</h1>

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
    <!-- espace agence -->
    <section class="espace_agence">
        <div class="container">
            <p class="rent_mango">Start Renting your cars on Mango</p>
            <br> <br>
            <p class="agency_text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam aperiam culpa,
                aspernatur necessitatibus est ab suscipit!
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam aperiam culpa,
                aspernatur necessitatibus est ab suscipit! </p>
            <div class="text-center">
                    @if (Route::has('register'))
                    <a class="register_now" href="{{ route('register') }}">
                <button class="register_now">
                    Register

                </button>
            </a>
            @endif
            </div>
        </div>
    </section>
    <!-- Témoignages-->
    <section class="temoignage">
        <h1>témoignages</h1>

        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="/Assets/44.jpg" alt="" style="width:100%;height:104%">
                </div>
                <div class="swiper-slide">
                        <img src="/Assets/55.jpg" alt="" style="width:100%;height:104%">
                </div>
                <div class="swiper-slide">
                        <img src="/Assets/66.jpg" alt="" style="width:100%;height:104%">
                </div>
                <div class="swiper-slide">
                        <img src="/Assets/77.jpg" alt="" style="width:100%;height:104%">
                </div>

            </div>

            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>

            <!-- Add Arrows -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

<!-- Footer -->
<div class="container contact_us_rectangle  ">
    <span class="rectangle_title ">Contact</span>
    <form class="contact_form" method="post" action="{{ route('contact') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
                <div class="input-field col s12">
                  <input id="name" type="text" name="mainName"  class="validate" placeholder="Nom">

                </div>
              </div>
              <div class="form-group">
                <div class="input-field col s12">
                  <input id="clientSubject" type="text" name="clientSubject"  class="validate" placeholder="Sujet">

                </div>
              </div>
              <div class="form-group">
                <div class="input-field col s12">
                  <input id="clientMail" type="email" name="clientMail"  class="validate" placeholder="Email">

                </div>
              </div>
              <div class="form-group">
                <div class="input-field col s12">
                  <textarea id="clientMessage" name="clientMessage" style="" class="materialize-textarea"
                    class="validate" placeholder="Message"></textarea>

                </div>
              </div>
      <button type="submit" name="sendBtn" class="sendbtn">
        <div> Envoyer </div>
      </button>
    </form>
  </div>

  <section id="footer">
    <div class="container footer_content">
      <div class="row text-center text-xs-center text-sm-left text-md-left">
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Liens</h5>
          <ul class="list-unstyled quick-links">
                <li><a class=" " href="{{ route('index') }}">Accueil</a></li>
                <li><a class="" href="">Top Cars</a></li>
                <li><a class="" href="{{ route('espaceagence') }}">Espace Agence</a></li>
                <li><a class=""href="{{ route('cataloge') }}">Catalogue</a></li>
                <li><a class=""href="">Contact</a></li>
            <li><a href="">Mentions Légales</a></li>

          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Restez en Contact</h5>
          <ul class="list-unstyled quick-links">
          <li><a href="mailto:contact@mango.com">contact@mango.com</a></li>
           <li><a href="">000000000</a></li>
           <li><a href="">000000000</a></li>


          </ul>

        </div>




        <div class="col-xs-12 col-sm-4 col-md-4 contact_mobile_center ">
          <a href="contact_us" class=" btn contact_btn_mobile ">Contact us</a></div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 socials">
          <h5>Suivez-nous</h5>
          <!-- <ul class="list-unstyled list-inline social">
            <li class="list-inline-item"><a id="face" href="/"><img src="Assets/Facebook.svg" alt="" style="height:30px" class="face"></a></li>
            <li class="list-inline-item"><a href=""><img src="Assets/Instagram.svg" alt="" style="height:30px"></a></li>
            <li class="list-inline-item"><a href="/"> <img src="Assets/Linkedin.svg" alt="" style="height:30px"></a></li>
            <li class="list-inline-item"><a href=""><img src="Assets/Dribble.svg" alt="" style="height:30px"></a></li>
          </ul> -->
          <li class="list-inline-item "><a data-num="1" href="/"><span alt="" class="social2" id="social2"></span></a>
          </li>
          <li class="list-inline-item "><a data-num="1" href="/"><span alt="" class="social3" id="social3"></span></a>
          </li>
          <li class="list-inline-item "><a data-num="1" href="/"><span alt="" class="social4" id="social4"></span></a>
          </li>
          <li class="list-inline-item "><a data-num="1" href="/"><span alt="" class="social5" id="social5"></span></a>
          </li>
          <li class="list-inline-item "><a data-num="1" href="/"><span alt="" class="social1" id="social1"></span></a>
          </li>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
          <p class="h6 right-reserved">&copy All right Reversed. Mango</p>
        </div>
      </div>
    </div>

  </section>
  <!--end footer-->



  <a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;"><img class="span"
    src="Assets/Up-Arrow.svg" alt="" style="height:25px"></a>

    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/js.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            effect: 'flip',
            grabCursor: true,
            pagination: {
                el: '.swiper-pagination',
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });


    </script>

</body>

</html>
