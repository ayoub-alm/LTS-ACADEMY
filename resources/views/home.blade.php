@extends('layouts.app')

@section('content')


<div class="container-fluid"  style="background: white">
    <div class="row p-lg-5">
        <div class="col-lg-4  text-center ">

            <img src="{{ asset('/images/logo.jpg') }}" width="200px">
            <h3 style="line-height: 1.2em;color:#7a7a7a;" class="display-6 fw-bolder">
                 La formation qui <br> convient le mieux <br>à vos besoins
                <br><br>

            </h3>
{{--            <h6>Apprenez à apprendre, découvrez les compétences de demain, et prenez votre carrière en main.</h6>--}}
        </div>
        <p class="col-lg-8" >
            <img src="{{ asset('/images/homePage/lts header.png') }}"   class="img-fluid">
        </p>
    </div>


</div>

<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container-fluid text-center p-lg-5 " style="background:linear-gradient(white,rgba(77, 184, 196, 0.01)  ) ;">

    <h5 class="display-3 mb-4  fw-bolder">
        <span class="red-color"> Nos Valeurs</span>
    </h5>
    <!-- Three columns of text below the carousel -->
    <div class="row d-flex justify-content-around">
        <div class="col-lg-3 m-2 values-icon">
            <p style="width:200px;height: 200px;text-align: center;margin: auto;overflow: hidden" class="row d-flex flex-column justify-content-center">
                <img src="{{ asset('/images/homePage/icon1.png') }}" alt="icon1" class="img-fluid"  width="120" height="120"     >
            </p>
            <h4 class="fw-normal gray-color">Foramtion de <br> Qualité</h4>
            {{--                    <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>--}}

        </div><!-- /.col-lg-3 m-2 -->
        <div class="col-lg-3 m-2 values-icon">
            <p style="width:200px;height: 200px;text-align: center;margin: auto;" class="row d-flex flex-column justify-content-center">
                <img src="{{ asset('/images/homePage/icon2.png') }}" alt="icon1" class="img-fluid"  width="170" height="170"     >
            </p>
            <h4 class="fw-normal gray-color">  Formateurs  <br> professionnels</h4>
        </div><!-- /.col-lg-3 m-2 -->
        <div class="col-lg-3 m-2 values-icon ">
            <p style="width:200px;height: 200px;text-align: center;margin: auto;overflow: hidden" class="row d-flex flex-column justify-content-center">
                <img src="{{ asset('/images/homePage/icon3.png') }}" alt="icon1" class="img-fluid"  width="170" height="170"     >
            </p>
            <h4 class="fw-normal gray-color" > Accompagnement <br> individuel</h4>
        </div><!-- /.col-lg-3 m-2 -->
    </div><!-- /.row -->
</div><!-- /.container -->


{{--            ******************************************************************************************************--}}

<div class="container-fluid">
    <h2 class="display-3 m-5 text-center col-lg-12  fw-bolder" id="formationSection">
        <span class="blue-color"> Nos Formations </span>
    </h2>
    <div class=" row text-center d-flex justify-content-center mb-5">
        <div class="card  col-lg-3 m-2 qhse">


            <div class="card-body">
                <h5 class="card-title card-img-overlay">
                    <a href="{{ route('qhse') }}" style="color: white;" >
                        RESPONSABLE QHSE
                    </a>
                </h5>
            </div>
        </div>
        <div class="card col-lg-3 m-2 para">
            <div class="card-body">
                <h5 class="card-title card-img-overlay">
                    <a href="{{ route('paramedical') }}" style="color: white;" >
                        PARAMÉDICAL
                    </a>
                </h5>
            </div>
        </div>
        <div class="card col-lg-3 m-2 web ">
            <div class="card-body">
                <h5 class="card-title card-img-overlay">
                    <a href="{{ route('development_web') }}" style="color: white;" >
                        DEVELOPPEMENT WEB
                    </a>
                </h5>
            </div>
        </div>

        <div class="card col-lg-3 m-2 RENOUVELABLE ">
            <div class="card-body">
                <h5 class="card-title card-img-overlay">
                    <a href="{{ route('energieRenouvelable') }}" style="color: white;" >
                        L'ENERGIE RENOUVELABLE
                    </a>
                </h5>
            </div>
        </div>


        <div class="card col-lg-3 m-2 DM">
            <div class="card-body">
                <h5 class="card-title card-img-overlay">
                        <a href="{{ route('delegue_medical') }}" style="color: white;" >
                        DÉLÉGUÉ MÉDICAL
                    </a>
                </h5>
            </div>
        </div>


        <div class="card col-lg-3 m-2 logistique">
            <div class="card-body">
                <h5 class="card-title card-img-overlay">
                    <a href="{{ route('logistique') }}" style="color: white;" >
                        LOGISTIQUE
                    </a>
                </h5>
            </div>
        </div>


        <div class="card col-lg-3 m-2 comptabilite">
            <div class="card-body">
                <h5 class="card-title card-img-overlay">COMPTABILITÉ</h5>
            </div>
        </div>


        <div class="card col-lg-3 m-2 langues">
            <div class="card-body">
                <h5 class="card-title card-img-overlay">LANGUES</h5>
            </div>
        </div>
        <div class="card col-lg-3 m-2 " style="background: lightskyblue;">
            <div class="card-body">
                <h5 class="card-title card-img-overlay">Autres</h5>
            </div>
        </div>
    </div>




</div>

<div class=" container-fluid " style="background: rgba(254,186,18,0.3);" >
    <div class="row featurette">
        <div class="col-md-6">
            <img src="{{ asset('/images/homePage/section-img.png') }} " class="img-fluid" height="250px">
        </div>
        <div class="col-md-6 text-with-img">
            <h2 class="featurette-heading lh-2 p-4 bolder">Notre offre  <span class="text-muted">de formations </span></h2>
            <p class="lead p-5">est variée et s’adresse à un large public : immigrants, travailleurs, étudiants ou professeurs universitaires, stagiaires postdoctoraux, candidats aux ordres professionnels, professeurs de langue…</p>
        </div>
    </div>
    <div class="row featurette mt-5">
        <div class="col-md-6 order-md-1">
            <img src=" {{ asset('/images/homePage/section-img2.png') }}" class="img-fluid" height="250px">
        </div>
        <div class="col-md-6 text-with-img">
            <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
            <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
        </div>
    </div>
</div>


{{--  ************************ FROM  ******************************************************--}}

<div class="container-fluid pt-5 pb-5   " style="background: url('https://thumbs.dreamstime.com/b/vector-school-pattern-school-seamless-background-vector-school-pattern-school-seamless-background-vector-illustration-123145059.jpg');background-attachment: fixed;">
    <div class="row">
        <div class="col-lg-5 mt-3 mb-3" style="justify-content: center;display: flex; flex-direction: column;">
            <h1 class="display-3 text-center" style="color: rgba(77,184,196);margin: auto;">
                Contactez nous
            </h1>
        </div>

        <div class="col-lg-7" style="background:rgba(77,184,196,0.52)">
            <form class="row g-3 pt-5 pb-5">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Prenom</label>
                    <input type="text" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Telephone</label>
                    <input type="phone" class="form-control" id="inputPassword4">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>




                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>
        </div>

    </div>

</div>
{{--  ************************ END FROM  ******************************************************--}}
<div class="container">
    <div class="row featurette mt-5">
        <div class="col-md-6 order-md-1">
            <img src=" {{ asset('/images/homePage/section-img2.png') }}" class="img-fluid" height="250px">
        </div>
        <div class="col-md-6 text-with-img">
            <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
            <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
        </div>
    </div>
</div>
@endsection
