<?php
    require_once("../../config/conexion.php"); 
    if(isset($_SESSION["usu_id"])){ 
?>
<!doctype html>
<html lang="es">
<head>
    <title>AnderCode</>::Inicio</title>
    <?php require_once("../MainHead/mainhead.php");?>
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

                        <a href="index.php" class="logo">
                            <i class=" uil-graduation-hat"></i>
                            <span> AnderCode</span>
                        </a>

                        <nav id="navigation">
                            <ul id="responsive">
                                <li><a href="index.php">Inicio</a> </li>
                                <li><a href="../Courses/" class="nav-active">Cursos</a> </li>
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

                            <span class="icon-feather-x icon-small uk-hidden@s" uk-toggle="target: .header-widget ; cls: is-active"> </span>
                            <a href="#" class="header-widget-icon" uk-tooltip="title: My Courses ; pos: bottom ;offset:21">
                                <i class="uil-youtube-alt"></i>
                            </a>

                            <div uk-dropdown="pos: top;mode:click;animation: uk-animation-slide-bottom-small" class="dropdown-notifications my-courses-dropdown">
                                <!-- notivication header -->
                                <div class="dropdown-notifications-headline">
                                    <h4>Your Courses</h4>
                                    <a href="#">
                                        <i class="icon-feather-settings" uk-tooltip="title: Notifications settings ; pos: left"></i>
                                    </a>
                                </div>
                                <!-- notification contents -->
                                <div class="dropdown-notifications-content" data-simplebar="">
                                    <!-- notiviation list -->
                                    <ul>
                                        <li class="notifications-not-read">
                                            <a href="course-intro.html">
                                                <span class="notification-image">
                                                    <img src="..\..\assets\images\course\1.png" alt=""> </span>
                                                <span class="notification-text">
                                                    <span class="course-title">Ultimate Web Designer & Web Developer
                                                    </span>
                                                    <span class="course-number">6/35 </span>
                                                    <span class="course-progressbar">
                                                        <span class="course-progressbar-filler" style="width:95%"></span>
                                                    </span>
                                                </span>
                                                <!-- option menu -->
                                                <span class="btn-option">
                                                    <i class="icon-feather-more-vertical"></i>
                                                </span>
                                                <div class="dropdown-option-nav" uk-dropdown="pos: bottom-right ;mode : hover">
                                                    <ul>
                                                        <li>
                                                            <span>
                                                                <i class="icon-material-outline-dashboard"></i>
                                                                Course Dashboard</span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-feather-video"></i>
                                                                Resume Course</span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-feather-x"></i>
                                                                Remove Course</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="course-intro.html">
                                                <span class="notification-image">
                                                    <img src="..\..\assets\images\course\3.png" alt=""> </span>
                                                <span class="notification-text">
                                                    <span class="course-title">The Complete JavaScript Course Build Real
                                                        Projects !</span>
                                                    <span class="course-number">6/35 </span>
                                                    <span class="course-progressbar">
                                                        <span class="course-progressbar-filler" style="width:95%"></span>
                                                    </span>
                                                </span>

                                                <!-- option menu -->
                                                <span class="btn-option">
                                                    <i class="icon-feather-more-vertical"></i>
                                                </span>
                                                <div class="dropdown-option-nav" uk-dropdown="pos: bottom-right ;mode : hover">
                                                    <ul>
                                                        <li>
                                                            <span>
                                                                <i class="icon-material-outline-dashboard"></i>
                                                                Course Dashboard</span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-feather-video"></i>
                                                                Resume Course</span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-feather-x"></i>
                                                                Remove Course</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="course-intro.html">
                                                <span class="notification-image">
                                                    <img src="..\..\assets\images\course\2.png" alt=""> </span>
                                                <span class="notification-text">
                                                    <span class="course-title">Learn Angular Fundamentals From The
                                                        Beginning</span>
                                                    <span class="course-number">6/35 </span>
                                                    <span class="course-progressbar">
                                                        <span class="course-progressbar-filler" style="width:95%"></span>
                                                    </span>
                                                </span>

                                                <!-- option menu -->
                                                <span class="btn-option">
                                                    <i class="icon-feather-more-vertical"></i>
                                                </span>
                                                <div class="dropdown-option-nav" uk-dropdown="pos: bottom-right ;mode : hover">
                                                    <ul>
                                                        <li>
                                                            <span>
                                                                <i class="icon-material-outline-dashboard"></i>
                                                                Course Dashboard</span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-feather-video"></i>
                                                                Resume Course</span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-feather-x"></i>
                                                                Remove Course</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="course-intro.html">
                                                <span class="notification-image">
                                                    <img src="..\..\assets\images\course\1.png" alt=""> </span>
                                                <span class="notification-text">
                                                    <span class="course-title">Ultimate Web Designer & Web Developer
                                                    </span>
                                                    <span class="course-number">6/35 </span>
                                                    <span class="course-progressbar">
                                                        <span class="course-progressbar-filler" style="width:95%"></span>
                                                    </span>
                                                </span>

                                                <!-- option menu -->
                                                <span class="btn-option">
                                                    <i class="icon-feather-more-vertical"></i>
                                                </span>
                                                <div class="dropdown-option-nav" uk-dropdown="pos: top-right ;mode : hover">
                                                    <ul>
                                                        <li>
                                                            <span>
                                                                <i class="icon-material-outline-dashboard"></i>
                                                                Course Dashboard</span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-feather-video"></i>
                                                                Resume Course</span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-feather-x"></i>
                                                                Remove Course</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dropdown-notifications-footer">
                                    <a href="#"> Ver Todo</a>
                                </div>
                            </div>

                            <a href="#" class="header-widget-icon" uk-tooltip="title: Notificiation ; pos: bottom ;offset:21">
                                <i class="uil-bell"></i>
                                <span>4</span>
                            </a>

                            <div uk-dropdown="pos: top-right;mode:click ; animation: uk-animation-slide-bottom-small" class="dropdown-notifications">
                                <!-- notivication header -->
                                <div class="dropdown-notifications-headline">
                                    <h4>Notifications </h4>
                                    <a href="#">
                                        <i class="icon-feather-settings" uk-tooltip="title: Notifications settings ; pos: left"></i>
                                    </a>
                                </div>
                                <!-- notification contents -->
                                <div class="dropdown-notifications-content" data-simplebar="">
                                    <!-- notiviation list -->
                                    <ul>
                                        <li class="notifications-not-read">
                                            <a href="#">
                                                <span class="notification-icon btn btn-soft-danger disabled">
                                                    <i class="icon-feather-thumbs-up"></i></span>
                                                <span class="notification-text">
                                                    <strong>Adrian Mohani</strong> Like Your Comment On Course
                                                    <span class="text-primary">Javascript Introduction </span>
                                                    <br> <span class="time-ago"> 9 hours ago </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="notification-icon btn btn-soft-primary disabled">
                                                    <i class="icon-feather-message-circle"></i></span>
                                                <span class="notification-text">
                                                    <strong>Stella Johnson</strong> Replay Your Comments in
                                                    <span class="text-primary">Programming for Games</span>
                                                    <br> <span class="time-ago"> 12 hours ago </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="notification-icon btn btn-soft-success disabled">
                                                    <i class="icon-feather-star"></i></span>
                                                <span class="notification-text">
                                                    <strong>Alex Dolgove</strong> Added New Review In Course
                                                    <span class="text-primary">Full Stack PHP Developer</span>
                                                    <br> <span class="time-ago"> 19 hours ago </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="notifications-not-read">
                                            <a href="#">
                                                <span class="notification-icon btn btn-soft-danger disabled">
                                                    <i class="icon-feather-share-2"></i></span>
                                                <span class="notification-text">
                                                    <strong>Jonathan Madano</strong> Shared Your Discussion On Course
                                                    <span class="text-primary">Css Flex Box </span>
                                                    <br> <span class="time-ago"> Yesterday </span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <a href="#" class="header-widget-icon" uk-tooltip="title: Message ; pos: bottom ;offset:21">
                                <i class="uil-envelope-alt"></i>
                                <span>1</span>
                            </a>

                            <div uk-dropdown=" pos: top-right;mode:click" class="dropdown-notifications">
                                <!-- notivication header -->
                                <div class="dropdown-notifications-headline">
                                    <h4>Messages</h4>
                                    <a href="#">
                                        <i class="icon-feather-settings" uk-tooltip="title: Message settings ; pos: left"></i>
                                    </a>
                                </div>
                                <!-- notification contents -->
                                <div class="dropdown-notifications-content" data-simplebar="">
                                    <ul>
                                        <li class="notifications-not-read">
                                            <a href="#">
                                                <span class="notification-avatar">
                                                    <img src="..\..\assets\images\avatars\avatar-2.jpeg" alt="">
                                                </span>
                                                <div class="notification-text notification-msg-text">
                                                    <strong>Jonathan Madano</strong>
                                                    <p>Okay.. Thanks for The Answer I will be waiting for your...
                                                    </p>
                                                    <span class="time-ago"> 2 hours ago </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="notification-avatar">
                                                    <img src="..\..\assets\images\avatars\avatar-3.jpeg" alt="">
                                                </span>
                                                <div class="notification-text notification-msg-text">
                                                    <strong>Stella Johnson</strong>
                                                    <p> Alex will explain you how to keep the HTML structure and all
                                                        that...</p>
                                                    <span class="time-ago"> 7 hours ago </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="notification-avatar">
                                                    <img src="..\..\assets\images\avatars\avatar-1.jpeg" alt="">
                                                </span>
                                                <div class="notification-text notification-msg-text">
                                                    <strong>Alex Dolgove</strong>
                                                    <p> Alia Joseph just joined Messenger! Be the first to send a
                                                        welcome message..</p>
                                                    <span class="time-ago"> 19 hours ago </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="notification-avatar">
                                                    <img src="..\..\assets\images\avatars\avatar-4.jpeg" alt="">
                                                </span>
                                                <div class="notification-text notification-msg-text">
                                                    <strong>Adrian Mohani</strong>
                                                    <p> Okay.. Thanks for The Answer I will be waiting for your...
                                                    </p>
                                                    <span class="time-ago"> Yesterday </span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                                <div class="dropdown-notifications-footer">
                                    <a href="#"> sell all <i class="icon-line-awesome-long-arrow-right"></i> </a>
                                </div>
                            </div>

                            <a href="#" class="header-widget-icon profile-icon">
                                <img src="..\..\assets\images\avatars\avatar-2.jpeg" alt="" class="header-profile-icon">
                            </a>

                            <div uk-dropdown="pos: top-right ;mode:click" class="dropdown-notifications small">
                                <!-- User Name / Avatar -->
                                <a href="profile-1.html">
                                    <div class="dropdown-user-details">
                                        <div class="dropdown-user-avatar">
                                            <img src="..\..\assets\images\avatars\avatar-5.jpeg" alt="">
                                        </div>
                                        <div class="dropdown-user-name">
                                            <?php echo $_SESSION["usu_nom"]?> <span>Estudiante</span>
                                        </div>
                                    </div>
                                </a>
                                <!-- User menu -->
                                <ul class="dropdown-user-menu">
                                    <li>
                                        <a href="#">
                                            <i class="icon-material-outline-dashboard"></i> Dashboard</a>
                                    </li>
                                    <li><a href="profile-edit.html">
                                            <i class="icon-feather-settings"></i> Configuración</a>
                                    </li>
                                    <li><a href="#" style="color:#62d76b">
                                            <i class="icon-feather-star"></i> Actualizar a Premiun</a>
                                    </li>
                                    <li>
                                        <a href="#" id="night-mode" class="btn-night-mode">
                                            <i class="icon-feather-moon"></i> Modo Nocturno
                                            <span class="btn-night-mode-switch">
                                                <span class="uk-switch-button"></span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="menu-divider">
                                    <li><a href="#">
                                            <i class="icon-feather-help-circle"></i> Ayuda</a>
                                    </li>
                                    <li><a href="../Logout/">
                                            <i class="icon-feather-log-out"></i> Cerrar Sesion</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- icon search-->
                        <a class="uk-navbar-toggle uk-hidden@s" uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#">
                            <i class="uil-search icon-small"></i>
                        </a>
                        <!-- User icons -->
                        <a href="#" class="uil-user icon-small uk-hidden@s" uk-toggle="target: .header-widget ; cls: is-active">
                        </a>
                    </div>
                    <!-- End Right Side Content / End -->

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

            <div class="home-hero" data-src="../../assets/images/home-hero.png" uk-img="">
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
                                <img src="..\..\assets\images\feature.png" alt="">
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
                                                <img src="..\..\assets\images\course\angular.JPG">
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
                                                <img src="..\..\assets\images\course\phpsql.JPG">
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
                                                <img src="..\..\assets\images\course\git.JPG">
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
                    <img src="..\..\assets\images\feature-2.png" alt="" class="my-lg-5">
                </div>
            </div>
        </div>

        <?php require_once("../MainFooter/Footer.php");?>
    </div>

    <?php require_once("../MainJs/mainjs.php");?>

</body>
</html>
<?php
    } else {
    header("Location:".Conectar::ruta()."index.php");
    }
?>