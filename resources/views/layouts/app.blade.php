<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Slider -->

    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LTS_ACADEMY') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


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

    <link href="{{ asset('css/style.css') }}" role="stylesheet">
    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/blog/">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" >
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
            font-family: 'Nunito', sans-serif;
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
            font-family: 'Nunito', sans-serif;
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
            font-family: 'Nunito', sans-serif;
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
        a:link { text-decoration: none; }
        a:visited { text-decoration: none; }
        a:hover { text-decoration: none; }
        a:active { text-decoration: none; }

        .swiper {
            width: 600px;
            height: 300px;
        }
    </style>


{{--    <script>--}}
{{--        const swiper = new Swiper('.swiper', {--}}
{{--            // Optional parameters--}}
{{--            direction: 'vertical',--}}
{{--            loop: true,--}}

{{--            // If we need pagination--}}
{{--            pagination: {--}}
{{--                el: '.swiper-pagination',--}}
{{--            },--}}

{{--            // Navigation arrows--}}
{{--            navigation: {--}}
{{--                nextEl: '.swiper-button-next',--}}
{{--                prevEl: '.swiper-button-prev',--}}
{{--            },--}}

{{--            // And if we need scrollbar--}}
{{--            scrollbar: {--}}
{{--                el: '.swiper-scrollbar',--}}
{{--            },--}}
{{--        });--}}
{{--    </script>--}}
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg nav-shadow" style="position: sticky;top:0px">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('/images/ltsacademylogo.png') }}" alt="" width="60" height="60" class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 flex-lg-row flex-sm-column" style="width: 100%;justify-content: space-around;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">ACCUEIL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route("about_us") }}">QUI SOMMES NOUS</a>
                        </li>
                        <a href="#formationSection">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#formationSection" id="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                NOS FORMATIONS
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('qhse') }}">RESPONSABLE QHSE</a></li>
                                <li><a class="dropdown-item" href="{{ route('paramedical') }}">PARAMÉDICAL</a></li>
                                <li><a class="dropdown-item" href="{{ route('development_web') }}">DEVELOPPEMENT WEB</a></li>
                                <li><a class="dropdown-item" href="{{ route('energieRenouvelable') }}">L'ENERGIE RENOUVELABLE</a></li>
                                <li><a class="dropdown-item" href="{{ route('delegue_medical') }}">DÉLÉGUÉ MÉDICAL</a></li>
                                <li><a class="dropdown-item" href="{{ route('logistique') }}">LOGISTIQUE</a></li>
                                <li><a class="dropdown-item" href="{{ route("comptabilite") }}">COMPTABILITÉ</a></li>
                                <li><a class="dropdown-item" href="{{ route("langues") }}">LANGUES</a></li>
                                <li><a class="dropdown-item" href="#">LOGICIELS</a></li>
{{--                                <li><a class="dropdown-item" href="#">LOGICIELS</a></li>--}}
                                <li><hr class="dropdown-divider"></li>
{{--                                <li><a class="dropdown-item" href="#">Something else here</a></li>--}}
                            </ul>
                        </li>
                        </a>
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>--}}
{{--                        </li>--}}

{{--                        <ul class="navbar-nav ms-auto">--}}
                                                    <!-- Authentication Links -->
                                                    @guest
                                                        @if (Route::has('login'))
                                                            <li class="nav-item">
                                                                <a class="nav-link " href="{{ route('login') }}">{{ __("S'inscrire") }}</a>
                                                            </li>
                                                        @endif

                                                        @if (Route::has('register'))
                                                            <li class="nav-item">
                                                                <a class="nav-link " href="{{ route('register') }}">{{ __("s'enregistrer") }}</a>
                                                            </li>
                                                        @endif
                                                    @else
                                                        <li class="nav-item dropdown">
                                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                                {{ Auth::user()->name }}
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                                   onclick="event.preventDefault();
                                                                                 document.getElementById('logout-form').submit();">
                                                                    {{ __('Logout') }}
                                                                </a>

                                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                    @csrf
                                                                </form>
                                                            </div>
                                                        </li>
                                                    @endguest
{{--                                                </ul>--}}
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <main class="">
            @yield('content')
        </main>
    </div>

    <div style="height:60px;width: 60px;color:red;z-index: 15000000;position: sticky;bottom: 150px;left:92%;top:25%;">
        <a href="https://wa.link/jkyiwb" >
            <img src="{{ asset('images/wtsp.svg') }}" width="60" height="60">
        </a>
    </div>
    <!-- FOOTER -->
    <footer class="container-fluid py-5 nav-shadow" style="">
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


    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="card col-lg-3 m-2 DM">
                    <div class="card-body">
                        <h5 class="card-title card-img-overlay">
                            <a href="{{ route('delegue_medical') }}" style="color: white;" >
                                DÉLÉGUÉ MÉDICAL
                            </a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
            <div class="swiper-slide">Slide 4</div>
            <div class="swiper-slide">Slide 5</div>
            <div class="swiper-slide">Slide 6</div>
            <div class="swiper-slide">Slide 7</div>
            <div class="swiper-slide">Slide 8</div>
            <div class="swiper-slide">Slide 9</div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

</body>
</html>
