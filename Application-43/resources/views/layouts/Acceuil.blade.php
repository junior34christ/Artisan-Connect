<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Acceuil - Artisan Connect</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::to('assets/img/favicon.png') }}">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">



    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ URL::to('assets/dist/css/bootstrap.min.css') }}">
    {{-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> --}}

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        .footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            padding: 2rem 5%;
            background: #0b0612e7;
        }

        .footer-text,
        .footer-iconTop {
            position: relative;
        }

        .footer-text p {
            font-size: 1.6rem;
        }

        .footer-iconTop {
            position: relative;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            padding: .8rem;
            background: yellowgreen;
            border: .2rem solid var(--main-color);
            border-radius: .6rem;
            z-index: 1;
            overflow: hidden;
        }

        .footer-iconTop a::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background: rgb(228, 129, 0);
            z-index: -1;
            transition: .5s;
        }

        .footer-iconTop a:hover::before {
            width: 100%;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{ URL::to('assets/dist/css/carousel.css') }}" rel="stylesheet">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img style="height: 60px; widht: 60px;" src="{{ asset('assets/img/Sans-titre-1.png')}}" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-primary active" style="margin-right: 20px" aria-current="page" href="{{ route('Acceuil') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-primary" href="{{ route('login') }}">Connexion</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li> --}}
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Rechercher</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>

        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/IMG-20240806-WA0017.jpg')}}" class="d-block w-100" alt="">
                    

                    <div class="container">
                        <div class="carousel-caption text-start">
                            {{-- <h1>Example headline.</h1>
                            <p>Some representative placeholder content for the first slide of the carousel.</p> --}}
                            <p><a class="btn btn-lg btn-primary" href="{{ route('register') }}">Inscrivez-vous dès aujourd'hui</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/IMG-20240806-WA0019.jpg')}}" class="d-block w-100" alt="image">

                    <div class="container">
                        <div class="carousel-caption">
                            {{-- <h1>Another example headline.</h1>
                            <p>Some representative placeholder content for the second slide of the carousel.</p> --}}
                            <p><a class="btn btn-lg btn-primary" href="#">Pour en savoir plus</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/IMG-20240806-WA0015.jpg')}}" class="d-block w-100" alt="...">

                    <div class="container">
                        <div class="carousel-caption text-end">
                            {{-- <h1>One more for good measure.</h1>
                            <p>Some representative placeholder content for the third slide of this carousel.</p> --}}
                            <p><a class="btn btn-lg btn-primary" href="{{ route('page') }}">Parcourir la galerie</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <!-- Marketing messaging and featurettes
  ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777"
                            dy=".3em">140x140</text>
                    </svg>

                    <h2>Heading</h2>
                    <p>Some representative placeholder content for the three columns of text below the carousel. This is
                        the first column.</p>
                    <p><a class="btn btn-secondary" href="#">Voir les détails &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777"
                            dy=".3em">140x140</text>
                    </svg>

                    <h2>Heading</h2>
                    <p>Another exciting bit of representative placeholder content. This time, we've moved on to the
                        second column.</p>
                    <p><a class="btn btn-secondary" href="#">Voir les détails &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777"
                            dy=".3em">140x140</text>
                    </svg>

                    <h2>Heading</h2>
                    <p>And lastly this, the third column of representative placeholder content.</p>
                    <p><a class="btn btn-secondary" href="#">Voir les détails &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Lorsque tu es passionné par ton métier, <span class="text-muted">tu choisis naturellement la meilleure application :</span></h2>
                    <p class="lead">"Artisan Connect, l'outil idéal pour les artisans qui aiment leur travail." </p>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/img/resized_image_500x500.jpg')}}" class="d-block w-100" alt="...">

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Oh oui, c’est aussi bon que ça. <span class="text-muted">Voir par toi-même.</span></h2>
                    {{-- <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea
                        of how this layout would work with some actual real-world content in place.</p> --}}
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="{{ asset('assets/img/IMG-20240806-WA0011.png')}}" class="d-block w-100" alt="...">

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Et enfin, celui-ci. <span class="text-muted">Checkmate.</span>
                    </h2>
                    <p class="lead">Et oui, découvrez l'artisanat authentique de côte d'ivoire ! Besoin d'un
                        service artisanal de qualité ? Notre plateforme web met en relation les artisan talentueux
                        avec ceux qui recherchent leur expertise. Trouvez des artisans qualifiés pour vos projets et 
                        soutenez l'artisanat de local. Rejoignez-nous pour célébrer le savoir-faire unique des Artisans 
                        ivoiriens!
                    </p>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/img/IMG-20240806-WA0014.png')}}" class="d-block w-100" alt="...">

                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->


        <!-- FOOTER -->
        <footer class="footer">
            <div class="footer-text">
                <p>Copyright &copy; 2024 by Entreprise-43 | Tout Droit Réserver.</p>
            </div>

            <div class="footer-iconTop">
                <a href="#"><img src="{{ asset('assets/img/icons/arrow-up-circle.svg') }}" alt=""></i></a>
            </div>
        </footer>
    </main>


    <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>


</body>

</html>
