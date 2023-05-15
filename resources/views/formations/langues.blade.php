@extends('layouts.app')

@section('content')

    <div class="container-fliud  mt-2"  >
        <div class="row">
            <h2 class="text-center mt-3 mb-3 display-3" style="color: #4db8c4;">
                    LANGUES
            </h2>
            <hr>
            <div class="col-lg-6 my-auto">
                <p class="p-2 lead p-lg-5" style="line-height: 1.8em;">
                    Le Centre de Formation LTS Academy propose une formation intensive en langues étrangères de 3 mois pour les personnes souhaitant améliorer leurs compétences linguistiques et leur ouverture culturelle. Les participants auront l'opportunité d'apprendre une nouvelle langue ou de renforcer leur niveau de compétence existant en langue anglaise, espagnole, française, allemande, italienne, chinoise ou arabe.

                </p>
            </div>
            <div class="col-lg-6 my-auto p-lg-5" style="overflow: hidden;">
                <p>
                    <img src="{{ asset('https://clic-campus.fr/wp-content/uploads/2021/07/Pourquoi_apprendre_langues_etrangeres_important.jpg') }}" class="img-fluid first-img" height="500px" >
                </p>
            </div>


{{--            <div class="row featurette text-center">--}}
                <div class="col-md-6 order-md-2 my-auto">
                    <p class="lead p-lg-5" style="line-height: 1.8em;">
                        Les formateurs hautement qualifiés guideront les participants dans leur apprentissage de la grammaire, du vocabulaire, de la prononciation et de la compréhension orale et écrite. Des sessions de pratiques seront organisées pour mettre en pratique les compétences linguistiques apprises. Les participants pourront également découvrir les cultures des pays où la langue est parlée, enrichissant ainsi leur expérience et leur compréhension globale de la langue.
                    </p>
                </div>
                <div class="col-md-6 text-center p-lg-5"  style="overflow: hidden;">
                    <img src="{{ asset('https://n7n6w5t3.rocketcdn.me/media/Apprendre-langue-avec-application.jpg') }}" class="img-fluid" height="500px" >
                </div>
{{--            </div>--}}
        </div>

        <div class="row">
            <div class="col-lg-6  my-auto">
                <p class="p-2 lead p-lg-5" style="line-height: 1.8em;">
                    À la fin de la formation, les participants seront capables de communiquer efficacement en langue étrangère dans des situations professionnelles et personnelles courantes. Ils auront également acquis une compréhension de base de la culture du pays où la langue est parlée. Inscrivez-vous dès maintenant à la formation en langues LTS Academy et donnez un coup de pouce à votre carrière et à votre vie personnelle grâce à l'acquisition de nouvelles compétences linguistiques.
                </p>
            </div>
            <div class="col-lg-6 my-auto p-lg-5" style="overflow: hidden;">
                <p>
                    <img src="{{ asset('https://n7n6w5t3.rocketcdn.me/media/Apprendre-langue.jpg') }}" class="img-fluid" height="500px" >
                </p>
            </div>
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
    <style>
        .first-img{
            -webkit-transform: scaleX(-1);
            transform: scaleX(-1);
        }
    </style>
@endsection
