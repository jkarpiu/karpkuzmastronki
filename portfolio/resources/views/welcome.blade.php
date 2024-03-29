<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>KarpKuzma # Portfolio</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo asset('img/icon2.ico')?>">
	<link rel="apple-touch-icon" href="<?php echo asset('img/icon2.png')?>">
	<link rel="icon" sizes="256x256" href="<?php echo asset('img/icon2.png')?>">

    <!-- Font Awesome Icons -->
    <link href="<?php echo asset('vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic'
        rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php echo asset('vendor/magnific-popup/magnific-popup.css')?>" rel="stylesheet">

    <!-- Theme CSS - Includes Bootstrap -->
    <link href="<?php echo asset('css/creative.min.css')?>" rel="stylesheet">

</head>

<body>

    <body id="page-top">

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">KarpKuzma</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#about">O Nas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#features">Co oferujemy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#projects">Nasze projekty</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#contact">Kontakt</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Masthead -->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold">Profesjonalne projektowanie i tworzenie witryn internetowych</h1>
                        <hr class="divider my-4">
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">Potrzebujesz jak najszybciej stworzyć stronę swojej firmy? A może sprzedajesz usługi i chciałbym mieć własny sklep internetowy, bądź blog? <br> Nie czekaj dłużej i napisz do nas!</p>
                        <a class="btn btn-success btn-xl js-scroll-trigger" href="#contact">Skontaktuj się z nami</a>
                    </div>
                </div>
            </div>
        </header>

        <!-- O Nas -->
        <section class="page-section bg-success" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Dowiedz się czegoś o nas!</h2>
                        <hr class="divider light my-4">
                        <p class="text-white-50 mb-4">Jesteśmy młodymi, pełnymi ambicji ludźmi, którzy od kilku lat zajmują się projektowaniem i tworzeniem stron internetowych. Jest to nasza pasja i źródło dochodów, które pomaga nam w rozwoju. Zapewniamy naszym klientom zarówno front-end (wygląd strony), jak i back-end (zaplecze techniczne).</p>
                        <a class="btn btn-light btn-xl js-scroll-trigger" href="#features">Zobacz tu!</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Co Oferujemy -->
        <section class="page-section" id="features">
            <div class="container">
                <h2 class="text-center mt-0">Co oferujemy</h2>
                <hr class="divider my-4">
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-gem text-success mb-4"></i>
                            <h3 class="h4 mb-2">Design</h3>
                            <p class="text-muted mb-0">Nasze strony charakteryzują się nowoczesnym wyglądem</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-laptop-code text-success mb-4"></i>
                            <h3 class="h4 mb-2">Responsywność</h3>
                            <p class="text-muted mb-0">Nasze strony dostosowane są do mniejszych i większych ekranów</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-globe text-success mb-4"></i>
                            <h3 class="h4 mb-2">Technologie</h3>
                            <p class="text-muted mb-0">Korzystamy wyłącznie z najnowszych i niezawodnych technologii</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-heart text-success mb-4"></i>
                            <h3 class="h4 mb-2">Cena</h3>
                            <p class="text-muted mb-0">Nowoczesnemu designowi towarzyszy niska cena</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Nasze projekty -->
        <section id="projects">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-sm-6">
                        <a class="projects-box" href="img/projects/fullsize/1.jpg">
                            <img class="img-fluid" src="img/projects/thumbnails/1.jpg" alt="">
                            <div class="projects-box-caption">
                                <div class="project-category text-white-50">
                                    Sklep internetowy
                                </div>
                                <div class="project-name">
                                    Nazwa projektu
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="projects-box" href="img/projects/fullsize/2.jpg">
                            <img class="img-fluid" src="img/projects/thumbnails/2.jpg" alt="">
                            <div class="projects-box-caption">
                                <div class="project-category text-white-50">
                                    Blog
                                </div>
                                <div class="project-name">
                                    Nazwa projektu
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="projects-box" href="img/projects/fullsize/3.jpg">
                            <img class="img-fluid" src="img/projects/thumbnails/3.jpg" alt="">
                            <div class="projects-box-caption">
                                <div class="project-category text-white-50">
                                    Portfolio
                                </div>
                                <div class="project-name">
                                    Nazwa projektu
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="projects-box" href="img/projects/fullsize/4.jpg">
                            <img class="img-fluid" src="img/projects/thumbnails/4.jpg" alt="">
                            <div class="projects-box-caption">
                                <div class="project-category text-white-50">
                                    Blog
                                </div>
                                <div class="project-name">
                                    Nazwa projektu
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="projects-box" href="img/projects/fullsize/5.jpg">
                            <img class="img-fluid" src="img/projects/thumbnails/5.jpg" alt="">
                            <div class="projects-box-caption">
                                <div class="project-category text-white-50">
                                    Witryna szkoły
                                </div>
                                <div class="project-name">
                                    Nazwa projektu
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="projects-box" href="img/projects/fullsize/6.jpg">
                            <img class="img-fluid" src="img/projects/thumbnails/6.jpg" alt="">
                            <div class="projects-box-caption p-3">
                                <div class="project-category text-white-50">
                                    Sklep internetowy
                                </div>
                                <div class="project-name">
                                    Nazwa projektu
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bugi -->
        <section class="page-section bg-dark text-white">
            <div class="container text-center">
                <h2 class="mb-4">Masz jakiś problem ze swoją stroną?</h2>
                <a class="btn btn-light btn-xl" href="#">Zgłoś teraz!</a>
            </div>
        </section>

        <!-- Kontakt -->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0">Skontaktuj się z nami!</h2>
                        <hr class="divider my-4">
                        <p class="text-muted mb-5">Jesteś gotowy, aby już teraz podjąć się współpracy z nami? <br> Nie czekaj dłużej i napisz do nas!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                        <div>+48 659 351 438</div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                        <!-- Make sure to change the email address in anchor text AND the link below! -->
                        <a class="d-block" href="mailto:karpkuzma@gmail.com">karpkuzma@gmail.com</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stopka -->
        <footer class="bg-light py-5">
            <div class="container">
                <div class="small text-center text-muted">Copyright &copy; 2020 - KarpKuzma</div>
            </div>
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="<?php echo asset('vendor/jquery/jquery.min.js')?>"></script>
        <script src="<?php echo asset('vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

        <!-- Plugin JavaScript -->
        <script src="<?php echo asset('vendor/jquery-easing/jquery.easing.min.js')?>"></script>
        <script src="<?php echo asset('vendor/magnific-popup/jquery.magnific-popup.min.js')?>"></script>

        <!-- Custom scripts for this template -->
        <script src="<?php echo asset('js/creative.min.js')?>"></script>

    </body>

</html>
