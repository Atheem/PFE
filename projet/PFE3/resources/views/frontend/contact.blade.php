<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="/css/main.css">
  <link rel="stylesheet" href="/css/reserv.css">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <title>Contactez nous</title>


</head>

<body>

  <div class="wrapper">
    <div class="div1">
      <div class="topcorner_logo"><a href="{{ route('index') }}"><img class="logo" src="Assets/Mango_logo.png" alt="Mango"></a></div>
      <h1>Contactez nous </h1>

    </div>
    <div class="kht"></div>


    <div class="div2">
      <div class="container contact_us">
        <P>NOUS SOMMES À VOTRE ÉCOUTE :</P>
        <p class="para">Faites nous part de votre demande via notre formulaire ou par email Support@mango.com
            <br> <br>
            Vous pouvez également nous contacter directement par téléphone
            au (0) 657 93 8295
            (0) 657 93 8295 .</p>
        <form class="contact_form" method="post"  action="{{ route('contact') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <div class="input-field col s12">
                <input id="name" type="text" name="mainName" required class="validate">
                <label for="name">Nom</label>
              </div>
            </div>
            <div class="form-group">
              <div class="input-field col s12">
                <input id="clientSubject" type="text" name="clientSubject" required class="validate">
                <label for="clientSubject">Sujet</label>
              </div>
            </div>
            <div class="form-group">
              <div class="input-field col s12">
                <input id="clientMail" type="email" name="clientMail" required class="validate">
                <label for="clientMail">Email</label>
              </div>
            </div>
            <div class="form-group">
              <div class="input-field col s12">
                <textarea id="clientMessage" name="clientMessage" style="" class="materialize-textarea" required
                  class="validate"></textarea>
                <label for="clientMessage">Message</label>
              </div>
            </div>
            <button type="submit" name="sendBtn" class="sendbtn">
              <div> Envoyer </div>
            </button>
          </form>
      </div>
    </div>
  </div>

  <!-- Compiled and minified JavaScript -->
  <script src="/js/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    $(document).ready(function () {
      $('.datepicker').datepicker();
    });
    $(document).ready(function(){
        $('input[type="checkbox"]').first().click(function(){
            if($(this).prop("checked") == true){

                $("#cin").removeAttr("disabled");

            }
            else if($(this).prop("checked") == false){
              $("#cin").attr("disabled");
            }
        });

        $('input[type="checkbox"]').last().click(function(){
            if($(this).prop("checked") == true){

                $("#passport").removeAttr("disabled");

            }
            else if($(this).prop("checked") == false){
              $("#passport").attr("disabled");
            }
        });
    });

  </script>
</body>
