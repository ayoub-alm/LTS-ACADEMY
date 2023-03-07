@extends('layouts.app')

@section('content')

    <div class="container-fliud  mt-2"  >
        <div class="row">
            <h2 class="text-center mt-3 mb-3 display-3" style="color: #4db8c4;">
                COMPTABILITÉ
            </h2>
            <hr>
            <div class="col-lg-6 my-auto">
                <p class="p-2 lead p-lg-5" style="line-height: 1.8em;">
                    Le Centre de Formation LTS Academy offre une formation de comptabilité intensive de 4 mois pour les personnes souhaitant développer leurs compétences et améliorer leurs connaissances dans le domaine. Les formateurs expérimentés accompagneront les apprenants tout au long de la formation, en proposant des sessions pratiques pour renforcer leur compréhension des concepts de comptabilité. À la fin de la formation, les apprenants seront capables de gérer les tâches comptables de base et de produire des rapports financiers précis en utilisant efficacement les logiciels de comptabilité.

                </p>
            </div>
            <div class="col-lg-6 my-auto p-lg-5" style="overflow: hidden;">
                <p>
                    <img src="{{ asset('https://img-0.journaldunet.com/OXlACg5AjR3CZ_hblYISr1qHv3U=/1500x/smart/576fef7754ec4fd5be0ae8e905f2d986/ccmcms-jdn/10817274.jpg') }}" class="img-fluid" height="500px" >
                </p>
            </div>


{{--            <div class="row featurette text-center">--}}
                <div class="col-md-6 order-md-2 my-auto">
                    <p class="lead p-lg-5" style="line-height: 1.8em;">
                        En résumé, la formation de comptabilité proposée par LTS Academy est une opportunité pour les personnes cherchant à se spécialiser dans le domaine. Les participants pourront acquérir des compétences pratiques grâce à des sessions de travaux pratiques et des exercices, encadrés par des formateurs expérimentés. À la fin de la formation, les apprenants seront prêts à travailler en tant que comptable professionnel, capables de produire des rapports financiers clairs et précis.
                    </p>
                </div>
                <div class="col-md-6 text-center p-lg-5"  style="overflow: hidden;">
                    <img src="{{ asset('https://fiches-pratiques.chefdentreprise.com/Assets/Img/FICHEPRATIQUE/2021/5/361591/Comptabilite-comment-saisir-nouveaux--F.jpg') }}" class="img-fluid" height="500px" >
                </div>
{{--            </div>--}}
        </div>
    </div>

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
