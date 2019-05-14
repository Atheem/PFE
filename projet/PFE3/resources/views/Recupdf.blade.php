<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .logo{
        background-image: url('/Assets/Mango_logo.png');
        background-repeat:no-repeat;
        width:700px; height:200px;
         position:absolute;
    }

    </style>
</head>
<body>
    <div class="logo">

    </div>

    <h1 style="text-align:center">Reçu N° {{ $id }} de Client :{{ $client }} </h1>

<hr>
    <label for="">Immatriculation : </label> <label for="">{{ $im }}</label> <br><br>

    <label for="">Modele :</label> <label for="">{{ $mod }}</label><br><br>

    <label for="">Agence :</label> <label for="">{{ $name }}</label> <br><br>

    <label for="">Nomber de Jour :</label> <label for="">@php
            $rk =new DateTime($dr);
$dk =new DateTime($dd);
    $days= date_diff($dk,$rk);
   echo $days->format("%a");
@endphp</label>
<br>
<br>
<label for="">Prix</label> <label for="">
        @php
        $rk =new DateTime($dr);
$dk =new DateTime($dd);
$days= date_diff($dk,$rk);
echo $prixj*$days->format("%a").'('.$prixj.' par Jour)';
@endphp
</label> <br>

    <h1 style="text-align:center">Merci</h1>
</body>
</html>
