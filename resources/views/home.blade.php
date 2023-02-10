@extends('layouts.app')

@section('content')




<div class="container-fluid"  style="background: white">
    <div class="row">
        <div class="col-lg-3 m-2 text-center ">

            <img src="{{ asset('/images/logo.jpg') }}" width="200px">
            <h2 >
                Votre avenir commence
                <span> <br> ici <br> </span>

            </h2>
            <h6>Apprenez à apprendre, découvrez les compétences de demain, et prenez votre carrière en main.</h6>
        </div>
        <p class="col-lg-8" >
            <img src="{{ asset('/images/homePage/lts header.png') }}"   class="img-fluid">
        </p>
    </div>


</div>

<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container-fluid text-center">

    <h5 class="display-3    m-5">
        <span class="red-color"> Nos  Valeurs</span>
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
<h2 class="display-3 m-5 text-center">
    <span class="blue-color"> Nos Formations </span>
</h2>


{{--            ******************************************************************************************************--}}

<div class="container-fluid">
    <div class=" row text-center d-flex justify-content-center mb-5">
        <div class="card  col-lg-3 m-2 qhse">

            <div class="card-body">
                <h5 class="card-title card-img-overlay">RESPONSABLE QHSE</h5>
            </div>
        </div>
        <div class="card col-lg-3 m-2 para">
            <div class="card-body">
                <h5 class="card-title card-img-overlay">PARAMÉDICAL</h5>
            </div>
        </div>
        <div class="card col-lg-3 m-2 web ">
            <div class="card-body">
                <h5 class="card-title card-img-overlay">DEVELOPPEMENT WEB</h5>
            </div>
        </div>

        <div class="card col-lg-3 m-2 RENOUVELABLE ">
            <div class="card-body">
                <h5 class="card-title card-img-overlay">L'ENERGIE RENOUVELABLE</h5>
            </div>
        </div>


        <div class="card col-lg-3 m-2 DM">
            <div class="card-body">
                <h5 class="card-title card-img-overlay">DÉLÉGUÉ MÉDICAL</h5>
            </div>
        </div>


        <div class="card col-lg-3 m-2 logistique">
            <div class="card-body">
                <h5 class="card-title card-img-overlay">LOGISTIQUE</h5>
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




<div class="text-center container" >
    <div class="row featurette">
        <div class="col-md-6">
            <img src="{{ asset('/images/homePage/section-img.png') }} " class="img-fluid" height="250px">
        </div>
        <div class="col-md-6 text-with-img">
            <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
            <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
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

<div class="container-fluid pt-5 pb-5 mt-5  " style="background: url('https://thumbs.dreamstime.com/b/vector-school-pattern-school-seamless-background-vector-school-pattern-school-seamless-background-vector-illustration-123145059.jpg');background-attachment: fixed;">
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

<!-- FOOTER -->
<footer class="container py-5">
    <div class="row">
        <div class="col-12 col-md">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"></circle><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"></path></svg>
            <small class="d-block mb-3 text-muted">© 2017–2022</small>
        </div>
        <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
                <li><a class="link-secondary" href="#">Cool stuff</a></li>
                <li><a class="link-secondary" href="#">Random feature</a></li>
                <li><a class="link-secondary" href="#">Team feature</a></li>
                <li><a class="link-secondary" href="#">Stuff for developers</a></li>
                <li><a class="link-secondary" href="#">Another one</a></li>
                <li><a class="link-secondary" href="#">Last time</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
                <li><a class="link-secondary" href="#">Resource name</a></li>
                <li><a class="link-secondary" href="#">Resource</a></li>
                <li><a class="link-secondary" href="#">Another resource</a></li>
                <li><a class="link-secondary" href="#">Final resource</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
                <li><a class="link-secondary" href="#">Business</a></li>
                <li><a class="link-secondary" href="#">Education</a></li>
                <li><a class="link-secondary" href="#">Government</a></li>
                <li><a class="link-secondary" href="#">Gaming</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
                <li><a class="link-secondary" href="#">Team</a></li>
                <li><a class="link-secondary" href="#">Locations</a></li>
                <li><a class="link-secondary" href="#">Privacy</a></li>
                <li><a class="link-secondary" href="#">Terms</a></li>
            </ul>
        </div>
    </div>
</footer>

@endsection
