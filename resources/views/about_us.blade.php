@extends('layouts.app')

@section('content')


    <div class="container-fluid">
        <div class="row p-lg-3" style="background: white;">
            <div class="col-lg-6 d-flex justify-content-center" style="background: white;;
                background-size:100px 100px ;background-attachment: fixed; " id="" >
                <h1 class="display-5 text-center fw-bolder p-lg-5" style="color: #7a7a7a;font-family: 'Nunito', sans-serif;">
{{--                    <img src="{{ asset('/images/logo.png') }}" class="img-fluid">--}}
                    <img src="{{ asset('/images/logo.jpg') }}" width="200px">
                    <br>
                    LTS ACADEMY
                    <br>
                    center de formation
                    <br><br><br>
                </h1>
            </div>

            <div class="col-lg-6 d-flex justify-content-center" style="
                background-size:100px 100px ;background-attachment: fixed; " id="" >
                <img src="https://img.freepik.com/vecteurs-libre/coach-parlant-devant-public-mentor-presentant-graphiques-rapports-reunion-employes-lors-formation-commerciale-seminaire-conference-illustration-vectorielle-pour-presentation-conference-education_74855-8294.jpg" class="img-fluid">
            </div>
        </div>
    </div>


    <div class="container-fluid  p-lg-5 " style="background:linear-gradient(white,rgba(77, 184, 196, 0.01)  ) ;">
        <!-- Three columns of text below the carousel -->
        <h5 class="display-3 p-2 fw-bolder mb-4 text-center">
            <span class="red-color fw-bolder"> Nos Valeurs</span>
        </h5>
        <div class="row d-flex justify-content-around text-center">
            <div class="col-lg-3 m-2 values-icon">
                <p style="width:200px;height: 200px;text-align: center;margin: auto;overflow: hidden" class="row d-flex flex-column justify-content-center">
                    <img src="{{ asset('/images/homePage/icon1.png') }}" alt="icon1" class="img-fluid"  width="120" height="120"     >
                </p>
                <h4 class="fw-normal gray-color">Foramtion de <br> Qualit??</h4>
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



    <div class="container mt-3 ">
        <h5 class="display-3 mb-4">
            <span class="red-color  fw-bolder mb-4 text-center">  </span>
        </h5>

        <h5 class="display-3 p-2 fw-bolder mb-4 text-center">
            <span class="red-color fw-bolder">Qui sommes nous </span>
        </h5>
            <div class="row featurette">
                <div class="col-md-6 my-auto">
                    <p class="lead p-lg-5 my-auto lh-lg">LTS Academy est un centre de formation et de langues de renom, offrant une exp??rience d'apprentissage exceptionnelle ?? ses ??tudiants. Avec une ??quipe d'enseignants hautement qualifi??s et exp??riment??s, LTS Academy offre des programmes de formation de haute qualit?? dans une vari??t?? de domaines.</p>
                </div>
                <div class="col-md-6">
                    <img src="https://scontent.fcmn3-2.fna.fbcdn.net/v/t39.30808-6/323425632_1192517514700165_3846389504008297383_n.jpg?stp=dst-jpg_p526x296&_nc_cat=105&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeGH_HO9GV--Rtnwv0SVM1gs9btRNMmLUsj1u1E0yYtSyPagLDTlTP-UE_KzhlsbGxw9jXv6yoUo7zkPykyqK4Im&_nc_ohc=M1Jv-TrhkXUAX_hVKMc&_nc_oc=AQnBr3QJ5njWg3bsXy4w3YmENyzi3wJ39LjZqVe-KM2615v1XSu8TiVffF4cHBH_kOM&_nc_ht=scontent.fcmn3-2.fna&oh=00_AfDF3Nk7mRwoUdM-14VJTBgk7YytzVN2mqxxUxqpRys6MA&oe=63F7BD1E" width="500" height="500" class="img-fluid">

                </div>
            </div>

            <div class="row featurette">
                <div class="col-md-7 order-md-2 my-auto">
                    <p class="lead p-lg-5 my-auto lh-lg">Que ce soit pour am??liorer vos comp??tences linguistiques, d??velopper vos comp??tences professionnelles, ou simplement pour explorer de nouveaux int??r??ts et passions, LTS Academy a le programme parfait pour vous. Les cours sont dispens??s dans un environnement d'apprentissage dynamique et interactif, avec des ressources et des technologies de pointe ?? votre disposition</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

                </div>
            </div>


            <div class="row featurette">
                <div class="col-md-7 my-auto my-auto">
                    <p class="lead p-lg-5 my-auto lh-lg">En plus de l'enseignement en classe, LTS Academy propose ??galement des programmes de formation en ligne, ce qui permet une flexibilit?? et une accessibilit?? accrues pour les ??tudiants. Avec une approche personnalis??e pour chaque apprenant, LTS Academy est d??termin?? ?? vous aider ?? atteindre vos objectifs d'apprentissage de mani??re efficace et agr??able. Rejoignez-nous d??s maintenant pour une exp??rience d'apprentissage inoubliable !</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

                </div>
            </div>
        </div>


@endsection
