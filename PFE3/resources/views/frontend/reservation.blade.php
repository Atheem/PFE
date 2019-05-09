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
  <title>Réservation</title>


</head>

<body>

  <div class="wrapper">
    <div class="div1">
      <div class="topcorner_logo"><a href="index"><img class="logo" src="/Assets/Mango_logo.png" alt="Mango"></a></div>
      <h1>Réservation</h1>
    </div>
    <div class="kht"></div>


    <div class="div2">
      <div class="container">
        <P>Veuillez Remplir les champs suivants :</P>
        <div class="row">
          <form class="col s12" action="{{ route('store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
@foreach ($voiture as $v)


                <input type="hidden" name="v" value="{{ $v->id }}">
                @endforeach
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <div class="row">
            <label class="col s6">
              <input type="checkbox"  class="filled-in checkbox-flame-color" id="moroccan"  />
              <span>Moroccan</span>
            </label>
            <label class="col s6">
              <input type="checkbox" class="filled-in checkbox-flame-color" id="foreign"   />
              <span>Foreign</span>
            </label>
          </div>
@foreach ($details as $d)


            <div class="row">
              <div class="input-field col s6 ">
                <input name="nom" type="text" class="validate" value="{{ $d->name }}">
                <label for="nom">Nom</label>
              </div>

            </div>
            <div class="row">
              <div class="input-field col s6">
                <input disabled   id="cin" name="cin" type="text" class="validate" value="{{ $d->CIN }}">
                <label for="cin">CIN</label>
              </div>
              <div class="input-field col s6">
                <input disabled id="passport" name="passport" type="text" class="validate" value="{{ $d->NumPassport }}">
                <label for="passport">Passport</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <input name="birthday" type="text" class="datepicker" value="{{ $d->DateNais  }}">
                <label for="birthday">Birthday</label>
              </div>
              <div class="input-field col s6">
                <input name="addresse" type="text" class="validate" value="{{ $d->Adresse  }}">
                <label for="addresse">Adresse</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <input name="tel" type="text" class="validate" value="{{ $d->TEL  }}">
                <label for="tel">Télephone</label>
              </div>
              <div class="input-field col s6">
                <input name="email" type="email" class="validate" value="{{ $d->email  }}">
                <label for="email">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <input name="permis" type="text" class="validate" value="{{ $d->Permis  }}">
                <label for="permi">Num Permis</label>
              </div>
              <div class="input-field col s6">
                <input name="permi_date" type="text" class="datepicker" value="{{ $d->Date_Permis  }}">
                <label for="permi_date">Date obt</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <input name="depart" type="text" class="datepicker">
                <label for="depart">Date Départ</label>
              </div>
              <div class="input-field col s6">
                <input name="retour" type="text" class="datepicker">
                <label for="retour">Date Retour</label>
              </div>
            </div>
            @endforeach
            <button type="submit" name="sendBtn" class="sendbtn float-right">
              <div> Réserver </div>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Compiled and minified JavaScript -->
  <script src="/js/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    $(function () {
      $('.datepicker').datepicker( { dateFormat: 'yy-mm-dd' });
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
