@extends('layouts.app')

@section('content')

    <div class="container mt-2"  style="background: ;">
        <div class="row">
            <h2 class="text-center mt-3 mb-3" style="color: #4db8c4;">
                Qualité, Hygiène, Sécurité et Environnement
            </h2>
            <hr>
            <div class="col-lg-6 ">
                <p class="p-2" style="line-height: 1.8em;">
                    Une formation en matière de QHSE (Qualité, Hygiène, Sécurité et Environnement) est une excellente opportunité pour apprendre comment assurer la sécurité et la qualité de votre entreprise. De plus, elle vous permettra de comprendre comment intégrer des principes et des pratiques de qualité et de sécurité dans votre entreprise. Cette formation couvre les aspects pratiques et les théories derrière les bonnes pratiques QHSE, vous donnant une base solide pour développer un système de gestion et de contrôle de la qualité et de la sécurité. La formation vous donne également les outils nécessaires pour vous assurer que les mesures de sécurité et de qualité sont correctement appliquées et mises en œuvre dans votre entreprise.
                </p>
            </div>
            <div class="col-lg-6 my-auto" style="">
                <p>
                    <img src="{{ asset('images/formations/qhse.jpg') }}" class="img-fluid">
                </p>
            </div>
        </div>
    </div>


    <div class="container-fluid  " >
        <div class="row  register-from "  style="background: url('https://thumbs.dreamstime.com/b/vector-school-pattern-school-seamless-background-vector-school-pattern-school-seamless-background-vector-illustration-123145059.jpg');background-attachment: fixed;">
            <div class="col-lg-4 my-auto" >
                <h2 class="text-center " style="color: #4db8c4; background:rgba(255,255,255,0.9); ">
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
