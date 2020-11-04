<!doctype html>
<html lang="es">
<head>
    <title>AnderCode</>::Inicio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="AnderCode - Cursos Gratis anderson-bastidas.com">
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="stylesheet" href="assets\css\night-mode.css">
    <link rel="stylesheet" href="assets\css\framework.css">
    <link rel="stylesheet" href="assets\css\bootstrap.css">
    <link rel="stylesheet" href="assets\css\icons.css">
</head>

<body>
    <div id="wrapper" class="bg-white">
        <header class="header header-horizontal header bg-grey uk-light">
            <div class="container">
                <nav uk-navbar="">
                    <div class="uk-navbar-left">
                        <span class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </span>

                        <a href="index.html" class="logo">
                            <i class=" uil-graduation-hat"></i>
                            <span> AnderCode</span>
                        </a>

                        <nav id="navigation">
                            <ul id="responsive">
                                <li><a href="index.php">Inicio</a> </li>
                                <li><a href="view/Courses/" class="nav-active">Cursos</a> </li>
                                <li><a href="#">Libros</a> </li>
                                <li><a href="#">Blog</a> </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="uk-navbar-right">
                        <div class="header-widget">
                            <div class="searchbox uk-visible@s">
                                <input class="uk-search-input" type="search" placeholder="Buscar...">
                                <button class="btn-searchbox"> </button>
                            </div>
                            <!-- Search box dropdown -->
                            <div uk-dropdown="pos: top;mode:click;animation: uk-animation-slide-bottom-small" class="dropdown-search">
                                <div class="erh BR9 MIw" style="top: -27px;position: absolute ; left: 24px;fill: currentColor;height: 24px;pointer-events: none;color: #f5f5f5;">
                                    <svg width="22" height="22">
                                        <path d="M0 24 L12 12 L24 24"></path>
                                    </svg></div>
                                <!-- User menu -->

                                <ul class="dropdown-search-list">
                                    <li class="list-title">
                                        Recent Searches
                                    </li>
                                    <li>
                                        <a href="course-intro.html">
                                            Ultimate Web Designer And Developer Course</a>
                                    </li>
                                    <li><a href="course-intro.html">
                                            The Complete Ruby on Rails Developer Course </a>
                                    </li>
                                    <li><a href="course-intro.html">
                                            Bootstrap 4 From Scratch With 5 Real Projects </a>
                                    </li>
                                    <li> <a href="course-intro.html">
                                            The Complete 2020 Web Development Bootcamp </a>
                                    </li>
                                    <li class="menu-divider">
                                    <li><a href="course-intro.html">
                                            Bootstrap 4 From Scratch With 5 Real Projects </a>
                                    </li>
                                    <li> <a href="course-intro.html">
                                            The Complete 2020 Web Development Bootcamp </a>
                                    </li>
                                </ul>

                            </div>

                            <a href="view/Register/" class="btn btn-primary transition-3d-hover ml-3"> Registrate</a>
                            <a href="view/Login/" class="btn btn-info transition-3d-hover ml-3"> Acceder</a>
                           
                        </div>
                        <!-- icon search-->
                        <a class="uk-navbar-toggle uk-hidden@s" uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#">
                            <i class="uil-search icon-small"></i>
                        </a>
                        <!-- User icons -->
                        <a href="#" class="uil-user icon-small uk-hidden@s" uk-toggle="target: .header-widget ; cls: is-active">
                        </a>
                    </div>
                </nav>
            </div>
        </header>

        <div class="nav-overlay uk-navbar-left uk-position-relative uk-flex-1 bg-grey uk-light p-2" hidden="" style="z-index: 10000;">
            <div class="uk-navbar-item uk-width-expand" style="min-height: 60px;">
                <form class="uk-search uk-search-navbar uk-width-1-1">
                    <input class="uk-search-input" type="search" placeholder="Buscar..." autofocus="">
                </form>
            </div>
            <a class="uk-navbar-toggle" uk-close="" uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
        </div>

        <div class="page-content">

            <div class="home-hero" data-src="assets/images/home-hero.png" uk-img="">
                <div class="uk-width-1-1">
                    <div class="page-content-inner uk-position-z-index">
                        <h1>Aprenda HTML, CSS, Android <br> Apps & Mas</h1>
                        <h4 class="my-lg-4"> Aprenda a crear sitios web y aplicaciones <br> escriba un código o inicie una empresa</h4>
                    </div>
                </div>
            </div>

            <div class="section">
                <div class="page-content-inner">

                    <div class="section-small text-md-left text-center">
                        <div class="uk-child-width-1-2@m uk-gird-large uk-flex-middle" uk-grid="">
                            <div>
                                <img src="assets\images\feature.png" alt="">
                            </div>
                            <div>
                                <h2>Aprenda a codificar <br> en cualquier momento <br> y en cualquier lugar..
                                    <br>
                                    <br>
                                    <a href="#" class="btn btn-soft-light"> Empezemos </a>
                                </h2>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="section-small delimiter-top">
                <div class="container-small">
                    <div class="text-center mb-5">
                        <h3> Echa un vistazo </h3>
                        <h5> Nuestro creciente catálogo, desde principiantes hasta avanzados</h5>
                    </div>
                    <div class="course-grid-slider mt-lg-5" uk-slider="finite: true">
                        <div class="uk-slider-container pb-3">
                            <ul class="uk-slider-items uk-child-width-1-2@s uk-child-width-1-3@m uk-grid">
                                <li>
                                    <a href="1.html" target="_blank">
                                        <div class="course-card">
                                            <div class="course-card-thumbnail ">
                                                <img src="assets\images\course\angular.JPG">
                                                <span class="play-button-trigger"></span>
                                            </div>
                                            <div class="course-card-body">
                                                <div class="course-card-info">
                                                    <div>
                                                        <span class="catagroy">Angular</span>
                                                    </div>
                                                    <div>
                                                        <i class="icon-feather-bookmark icon-small"></i>
                                                    </div>
                                                </div>
                                                <h4>Curso Angular</h4>
                                                <p>Crea tu curriculum online con angular y firebase .. </p>
                                                <div class="course-card-footer">
                                                    <h5> <i class="icon-feather-film"></i> 5 Videos </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="2.html" target="_blank">
                                        <div class="course-card">
                                            <div class="course-card-thumbnail ">
                                                <img src="assets\images\course\phpsql.JPG">
                                                <span class="play-button-trigger"></span>
                                            </div>
                                            <div class="course-card-body">
                                                <div class="course-card-info">
                                                    <div>
                                                        <span class="catagroy">PHP y SQL SERVER</span>
                                                    </div>
                                                    <div>
                                                        <i class="icon-feather-bookmark icon-small"></i>
                                                    </div>
                                                </div>
                                                <h4>PHP y SQL SERVER MVC </h4>
                                                <p> Crea aplicaciones con PHP y SQL SERVER con MVC y JS... </p>
                                                <div class="course-card-footer">
                                                    <h5> <i class="icon-feather-film"></i> 5 Videos </h5>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="3.html" target="_blank">
                                        <div class="course-card">
                                            <div class="course-card-thumbnail ">
                                                <img src="assets\images\course\git.JPG">
                                                <span class="play-button-trigger"></span>
                                            </div>
                                            <div class="course-card-body">
                                                <div class="course-card-info">
                                                    <div>
                                                        <span class="catagroy">Git y GitHub</span>
                                                    </div>
                                                    <div>
                                                        <i class="icon-feather-bookmark icon-small"></i>
                                                    </div>
                                                </div>
                                                <h4>Curso de Git y Github</h4>
                                                <p> Realizar el versionamiento de codigo en tus proyectos...</p>
                                                <div class="course-card-footer">
                                                    <h5> <i class="icon-feather-film"></i> 3 Videos </h5>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <a class="uk-position-center-left uk-position-small uk-hidden-hover slidenav-prev" href="#" uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small uk-hidden-hover slidenav-next" href="#" uk-slider-item="next"></a>
                        </div>
                    </div>

                    <div class="text-center">
                        <a href="#" class="btn btn-soft-light btn-small btn-circle"> Ver más cursos</a>
                    </div>
                </div>
            </div>

            <div class="section text-center">
                <div class="page-content-inner">
                    <h2 class="mb-4"> Tenemos todo lo técnico cubierto. </h2>
                    <img src="assets\images\feature-2.png" alt="" class="my-lg-5">
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="container">
                <div class="uk-grid-collapse" uk-grid="">
                    <div class="uk-width-expand@s uk-first-column">
                        <p>© 2020 <strong>AnderCode</strong>. All Rights Reserved. </p>
                    </div>
                    <div class="uk-width-auto@s">
                        <nav class="footer-nav-icon">
                            <ul>
                                <li><a href="https://www.facebook.com/AnderCode-105910337842307"><i class="icon-brand-facebook"></i></a></li>
                                <li><a href="https://www.youtube.com/c/AnderCode"><i class="icon-brand-youtube"></i></a></li>
                                <li><a href="https://github.com/Anders87x"><i class="icon-brand-github"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        (function (window, document, undefined) {
            'use strict';
            if (!('localStorage' in window)) return;
            var nightMode = localStorage.getItem('gmtNightMode');
            if (nightMode) {
                document.documentElement.className += ' night-mode';
            }
        })(window, document);
        (function (window, document, undefined) {
            'use strict';
            // Feature test
            if (!('localStorage' in window)) return;
            // Get our newly insert toggle
            var nightMode = document.querySelector('#night-mode');
            if (!nightMode) return;
            // When clicked, toggle night mode on or off
            nightMode.addEventListener('click', function (event) {
                event.preventDefault();
                document.documentElement.classList.toggle('night-mode');
                if (document.documentElement.classList.contains('night-mode')) {
                    localStorage.setItem('gmtNightMode', true);
                    return;
                }
                localStorage.removeItem('gmtNightMode');
            }, false);
        })(window, document);
    </script>
    <script src="assets\js\framework.js"></script>
    <script src="assets\js\jquery-3.3.1.min.js"></script>
    <script src="assets\js\mmenu.min.js"></script>
    <script src="assets\js\simplebar.js"></script>
    <script src="assets\js\main.js"></script>
</body>
</html>