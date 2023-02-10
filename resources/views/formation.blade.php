@extends('layouts.app')

@section('content')

    <div class="container mt-5"  style="background: ;">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="" style="color: #4db8c4;">
                    Qualité, Hygiène, Sécurité et Environnement
                </h3>
                <hr>
                <p class="p-2">
                    Une formation en matière de QHSE (Qualité, Hygiène, Sécurité et Environnement) est une excellente opportunité pour apprendre comment assurer la sécurité et la qualité de votre entreprise. De plus, elle vous permettra de comprendre comment intégrer des principes et des pratiques de qualité et de sécurité dans votre entreprise. Cette formation couvre les aspects pratiques et les théories derrière les bonnes pratiques QHSE, vous donnant une base solide pour développer un système de gestion et de contrôle de la qualité et de la sécurité. La formation vous donne également les outils nécessaires pour vous assurer que les mesures de sécurité et de qualité sont correctement appliquées et mises en œuvre dans votre entreprise.
                </p>
            </div>
            <div class="col-lg-6">
                <p>
                    <img src="{{ asset('images/formations/qhse.jpg') }}" class="img-fluid">
                </p>
            </div>
        </div>



        <form class="row g-3">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
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
@endsection
