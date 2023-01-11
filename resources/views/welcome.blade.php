<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>Blog Template · Bootstrap</title>
    <link href="{{ asset('/css/style.css') }}" role="stylesheet">
    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/blog/">



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

    <div class="container">
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

        <div class="nav-scroller py-1 mb-5">
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
    <div class="container mt-2" >
        <div class="row">
            <div class="col-lg-4 text-center ">

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



        <div class="row">
            <div class="col-lg-6">
                <img src="https://unblast.com/wp-content/uploads/2020/05/Back-to-School-Illustration.jpg  " class="img-fluid" height="300px">
            </div>
            <div class="col-lg-6 p-5 text-center">
                <h1 >
                    Votre avenir commence
                    <span> <br> ici <br> </span>

                </h1>
            </div>
            <div class="col-lg-6 p-5 text-center">
                <h1 >
                    Votre avenir commence
                    <span> <br> ici <br> </span>

                </h1>
            </div>
            <div class="col-lg-6">
                <img src=" https://thumbs.dreamstime.com/b/students-receive-education-remotely-learning-foreign-languages-online-learning-foreign-languages-online-139292835.jpg" class="img-fluid" height="300px">
            </div>
        </div>
    </div>


    <main>




        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container-fluid text-center">
            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <img src=" https://thumbs.dreamstime.com/b/students-receive-education-remotely-learning-foreign-languages-online-learning-foreign-languages-online-139292835.jpg" class="img-fluid" width="140" height="140">

                    <h2 class="fw-normal">Heading</h2>
                    <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>

                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src=" https://thumbs.dreamstime.com/b/students-receive-education-remotely-learning-foreign-languages-online-learning-foreign-languages-online-139292835.jpg" class="img-fluid" width="140" height="140">
                    <h2 class="fw-normal">Heading</h2>
                    <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>

                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src=" https://thumbs.dreamstime.com/b/students-receive-education-remotely-learning-foreign-languages-online-learning-foreign-languages-online-139292835.jpg" class="img-fluid" width="140" height="140">
                    <h2 class="fw-normal">Heading</h2>
                    <p>And lastly this, the third column of representative placeholder content.</p>

                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">
         <div class="" style="background: url('data:image/jpeg;base64,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');
                        background-attachment: fixed;background-size:800px 800px ;">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
                    <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
                    <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                    <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
                </div>
            </div>
         </div>
            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->


        <!-- FOOTER -->
        <footer class="container">
            <p class="float-end"><a href="#">Back to top</a></p>
            <p>© 2017–2022 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
        </footer>
    </main>

    <footer class="blog-footer">
        <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a
                href="https://twitter.com/mdo">@mdo</a>.</p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>



</body>

</html>
