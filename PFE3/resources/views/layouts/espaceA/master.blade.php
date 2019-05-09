<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <meta name="_token" content="{{csrf_token()}}" />
  <!-- CSS Files -->
  <link href="/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="/css/demo.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="{{ route('agence') }}" class="simple-text ">
          <div class="text-center">
            <img class="jrb" src="/lib/img/Mango_logo.png">
          </div>
        </a>
        <!-- <a href="" class="simple-text logo-normal">
         Plateformes
          <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div>
        </a> -->
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="{{ route('agence') }}">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li>
            <a href="{{ route('gestvoiture') }}">
              <i class="nc-icon nc-bus-front-12"></i>
              <p>Géstion de Voitures</p>
            </a>
          </li>
          <li>
            <a href="{{ route('profilea') }}">
              <i class="nc-icon nc-single-02"></i>
              <p> Profile</p>
            </a>
          </li>
          <li>
            <a href="{{ route('reserv') }}">
              <i class="nc-icon nc-single-copy-04"></i>
              <p>Réservation</p>
            </a>
          </li>
          <li>
                <a href="{{ route('viewrec') }}">
                    <i class="fas fa-bug"></i>
                  <p>Reclamation</p>
                </a>
              </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">@yield('brand')</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">

            <ul class="navbar-nav">

                <li class="nav-item ">
                    <a id=""  class="nav-link" href="{{ route('profilea') }}" >
                        <i class="far fa-user"></i>  {{ Auth::guard('agence')->user()->name}} <span class="caret"></span>
                    </a>
                </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                         <i class="fas fa-sign-out-alt"></i>   {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    <li class="nav-item ">
                        <a id=""  class="nav-link" href="{{ route('index') }}" >
                            <i class="fas fa-home"></i> Retour
                        </a>
                    </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-lg">

  <canvas id="bigDashboardChart"></canvas>


</div> -->
      <div class="content">
        @yield('content')
      </div>

      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li>
                  <a href="https://www.creative-tim.com" target="_blank">Acceuil</a>
                </li>
                <li>
                  <a href="http://blog.creative-tim.com/" target="_blank">FAQ</a>
                </li>
                <li>
                  <a href="https://www.creative-tim.com/license" target="_blank">Contactez-nous</a>
                </li>
              </ul>
            </nav>

          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="/js/jquery-3.3.1.min.js"></script>
  <script src="/js/core/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="/js/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>
