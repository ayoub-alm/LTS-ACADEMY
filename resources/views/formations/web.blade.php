@extends('layouts.app')

@section('content')

    <div class="container text-center mt-2"  >
        <div class="row">
            <h2 class="text-center mt-3 mb-3 display-3" style="color: #4db8c4;">
                Developement Web
            </h2>
            <hr>
            <div class="col-lg-6 my-auto">
                <p class="p-2 lead" style="line-height: 1.8em;">
                    La formation de développement web de LTS ACADEMY dure 4 mois et comprend les modules HTML, CSS, JavaScript, PHP et MySQL. Cette formation complète permet aux débutants d'acquérir les compétences de base nécessaires pour construire des pages web, des applications web dynamiques et gérer les bases de données. Elle est dispensée par des professionnels expérimentés et accessible à tous, quel que soit votre niveau de compétence en programmation. En sortant de cette formation, vous aurez les compétences nécessaires pour démarrer votre carrière de développeur web compétent.
                </p>
            </div>
            <div class="col-lg-6 my-auto" style="overflow: hidden;">
                <p>
                    <img src="{{ asset('images/formations/web.jpg') }}" class="img-fluid" height="500px" >
                </p>
            </div>
            <hr class="m-4">

{{--            <div class="row featurette text-center">--}}
                <div class="col-md-6 order-md-2 my-auto">
                    <p class="lead" style="line-height: 1.8em;">
                        La formation est dispensée par des professionnels expérimentés dans le domaine et est conçue pour être accessible aux débutants, même si vous n'avez aucune expérience préalable en programmation. À la fin de la formation, vous aurez une compréhension approfondie des principes du développement web et des compétences pratiques pour construire des applications web avancées. Rejoignez la formation maintenant et commencez votre parcours pour devenir un développeur web qualifié.
                    </p>
                </div>
                <div class="col-md-6 text-center"  style="overflow: hidden;">
                    <img src="{{ asset('images/formations/web2.jpg') }}" class="img-fluid" height="500px" >
                </div>
{{--            </div>--}}
        </div>
    </div>
    <hr>
    <div class="container-fluid mt-5 " >
        <div class="row  register-from "  style="background: url('https://thumbs.dreamstime.com/b/vector-school-pattern-school-seamless-background-vector-school-pattern-school-seamless-background-vector-illustration-123145059.jpg');background-attachment: fixed;">
            <div class="col-lg-4 my-auto" >
                <h2 class="text-center mt-2 mb-3 " style="color: #4db8c4; background:rgba(255,255,255,0.9); ">
                    Intéressés? <br>
                    Contactez-nous en remplissant ce formulaire pour plus d'informations
                </h2>
            </div>
            <div class="col-lg-8 pt-5 pb-5" style="background:rgba(77,184,196,0.52)">
                <form class="row g-3 ">
                    <div class="col-md-6">
                        <label for="first_name" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="first_name" name="first_name">
                    </div>
                    <div class="col-md-6">
                        <label for="last_name" class="form-label">Prenom</label>
                        <input type="text" class="form-control" id="last_name" name="last_name">
                    </div>

                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="col-md-6">
                        <label for="GSM" class="form-label">GSM</label>
                        <input type="text" class="form-control" id="GSM" name="GSM">
                    </div>


                    <div class="col-md-6">
                        <label for="birthday" class="form-label">Date de naissance</label>
                        <input type="date" class="form-control" id="birthday" name="birthday">
                    </div>

                    <div class="col-md-6">
                        <label for="job" class="form-label">Profession </label>
                        <input type="text" class="form-control" id="job" name="job">
                    </div>

                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Adresse actuel</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
                    </div>

                    <div class="col-md-6">
                        <label for="city" class="form-label">Ville</label>
                        <input type="text" class="form-control" id="city" name="city">
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">Formation</label>
                        <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    {{--                    <div class="col-md-2">--}}
                    {{--                        <label for="inputZip" class="form-label">CIN</label>--}}
                    {{--                        <input type="text" class="form-control" id="inputZip">--}}
                    {{--                    </div>--}}
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Check me out
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
