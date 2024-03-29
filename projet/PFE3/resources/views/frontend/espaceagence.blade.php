@extends('layouts.master')

@section('content')
<section class="espace_agence_bg">
    <h1>Plus de 50 d'inscrits, <br>
            pourquoi pas vous ?</h1>

</section>
<div class="wrapper_jrb">
<section class="cards ">

        <div class="container">



            <div class="row">

                    <div class="col">
                        <a href="{{ route('ragence') }}">
                            <div class="card mx-auto" style="width: 20rem;">
                                <img class="card-img-top" src="Assets/sign_up.png" alt="" style="width:9em; height:13em;">
                                <div class="card-body">

                                    <p class="card-text">Inscription</p>

                                </div>
                        </a>
                            </div>
                        </div>
                        <div class="col">
                            <a href="{{ route('agencelogin') }}">
                            <div class="card mx-auto" style="width: 20rem;">
                                <img class="card-img-top" src="Assets/log_in.png" alt="" style="width:9em; height:13em;">
                                <div class="card-body">

                                    <p class="card-text">Connexion</p>

                                </div>
                            </div>
                        </a>
                        </div>

            </section>
        </div>
<section class="use_mango">
    <div class="container ">
        <div class="row">
            <div class="col ">
                <div class="jj">
                <h1 class="t1">Mango vous permet de Louer vos voitures</h1>
                <p>Vous profitez d’une liberté totale. Vous déterminez le prix de location, votre disponibilité et
                     les conditions de réservation de vos locataires.</p>
                     <hr>
                     <h1 >C’est simple : de la publication de votre annonce
                            à la fin de la location</h1>
                     <p>Vous profitez d’une liberté totale. Vous déterminez le prix de location, votre disponibilité et
                            les conditions de réservation de vos locataires.</p>
                            <hr>
                            <h1 >La sécurité avant tout : louer sa voiture
                                    sur Mango c’est 100% rassuré</h1>
                            <p>Vous profitez d’une liberté totale. Vous déterminez le prix de location, votre disponibilité et
                                    les conditions de réservation de vos locataires.</p>
            </div>
        </div>
        </div>
    </div>
</section>
<section class="how_to_rent">
    <h1>Comment louer vos voitures ?</h1>
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <img  src="/Assets/driving-test.png" class="d"alt="">
                <h2>Gérez vos voitures</h2>
                <p>Indiquez toutes les informations de votre véhicule, sans oublier de l’accompagner de photos.</p>
            </div>
            <div class="col tuto_img">
                <img  src="/Assets/car_add.png" alt="" style="height:auto; width:100%;">
            </div>
        </div>
        <div class="row reserv_row text-center">
                <div class="col tuto_img" >
                        <img src="/Assets/car_adds.png" alt="" style="height:auto; width:100%;">
                    </div>
                <div class="col">
                    <img src="/Assets/calendar (1).png" alt="">
                    <h2>Gérez vos réservations</h2>
                    <p>Effectuez le suivi des réservations, Vous êtes libre d’accepter ou de refuser toute demande.</p>
                </div>

            </div>
    </div>
</section>



@endsection
