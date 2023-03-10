<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>Blog Template · Bootstrap</title>
    <link href="{{ asset('css/style.css') }}" role="stylesheet">
    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/blog/">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" >


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <style>
        /* stylelint-disable selector-list-comma-newline-after */

        .blog-header {
            line-height: 1;
            border-bottom: 1px solid #e5e5e5;
        }

        .blog-header-logo {
            font-family: "Playfair Display", Georgia, "Times New Roman", serif;
            font-size: 1.5rem;
            text-align: center;
        }

        .blog-header-logo:hover {
            text-decoration: none;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Playfair Display", Georgia, "Times New Roman", serif;
        }



        @media (min-width: 768px) {
            .display-4 {
                font-size: 3rem;
            }
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .nav-scroller .nav-link {
            padding-top: .75rem;
            padding-bottom: .75rem;
            font-size: .875rem;
        }

        body{
            font-family: "Playfair Display", Georgia, "Times New Roman", serif;
            background: rgba(77, 184, 196, 0.1);
        }


        @media (min-width: 768px) {
            .h-md-250 {
                height: 250px;
            }
        }

        /* Pagination */
        .blog-pagination {
            margin-bottom: 4rem;
        }

        .blog-pagination>.btn {
            border-radius: 2rem;
        }


        /*
        * Footer
        */
        .blog-footer {
            padding: 2.5rem 0;
            color: #727272;
            text-align: center;
            background-color: #f9f9f9;
            border-top: .05rem solid #e5e5e5;
        }

        .blog-footer p:last-child {
            margin-bottom: 0;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <a class="link-secondary" href="#">      <img src="{{ asset('/images/logo.jpg') }}" width="80px"></a>
                </div>
                <div class="col-4 text-center ">
                    <a class="blog-header-logo text-dark pt-3 text-center" href="#">  LTS ACADEMY</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
{{--                    <a class="link-secondary" href="#" aria-label="Search">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"--}}
{{--                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img"--}}
{{--                            viewBox="0 0 24 24">--}}
{{--                            <title>Search</title>--}}
{{--                            <circle cx="10.5" cy="10.5" r="7.5" />--}}
{{--                            <path d="M21 21l-5.2-5.2" />--}}
{{--                        </svg>--}}
{{--                    </a>--}}
                    <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
                </div>
            </div>
        </header>

        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 link-secondary" href="#">World</a>
                <a class="p-2 link-secondary" href="#">U.S.</a>
                <a class="p-2 link-secondary" href="#">Technology</a>
                <a class="p-2 link-secondary" href="#">Design</a>
                <a class="p-2 link-secondary" href="#">Culture</a>
                <a class="p-2 link-secondary" href="#">Business</a>
                <a class="p-2 link-secondary" href="#">Politics</a>
                <a class="p-2 link-secondary" href="#">Opinion</a>
                <a class="p-2 link-secondary" href="#">Science</a>
                <a class="p-2 link-secondary" href="#">Health</a>
                <a class="p-2 link-secondary" href="#">Style</a>
                <a class="p-2 link-secondary" href="#">Travel</a>
            </nav>
        </div>
    </div>


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

</body>

</html>
