<!doctype html>
<html lang="es">
<head>
    <title>AnderCode</>::Libros</title>
    <?php require_once("../MainHead/mainhead.php");?>
</head>

<body>
    <div id="wrapper">
        <header class="header" uk-sticky="top:20 ; cls-active:header-sticky">
            <div class="container">
                <nav uk-navbar="">
                    <div class="uk-navbar-left">
                        <span class="btn-mobile" uk-toggle="target: #wrapper ; cls: mobile-active"></span>
                        <a href="dashboard.html" class="logo">
                            <img src="..\..\assets\images\logo-dark.svg" alt="">
                            <span> AnderCode</span>
                        </a>

                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="../Home/"> Inicio </a></li>
                                <li><a href="../Courses/"> Libros </a></li>
                                <li>Buscar Libros</li>
                            </ul>
                        </nav>
                    </div>

                    <div class="uk-navbar-right">
                        <div class="header-widget">

                            <?php
                                require_once("../../config/conexion.php"); 
                                if(isset($_SESSION["usu_id"])){ 
                                    ?>
                                        <span class="icon-feather-x icon-small uk-hidden@s" uk-toggle="target: .header-widget ; cls: is-active"> </span>

                                        <a href="#" class="header-widget-icon" uk-tooltip="title: My Courses ; pos: bottom ;offset:21">
                                            <i class="uil-youtube-alt"></i>
                                        </a>

                                        <div uk-dropdown="pos: top;mode:click;animation: uk-animation-slide-bottom-small" class="dropdown-notifications my-courses-dropdown">
                                            <div class="dropdown-notifications-headline">
                                                <h4>Mis Cursos</h4>
                                                <a href="#">
                                                    <i class="icon-feather-settings" uk-tooltip="title: Notifications settings ; pos: left"></i>
                                                </a>
                                            </div>

                                            <div class="dropdown-notifications-content" data-simplebar="">
                                                <ul>
                                                    <li class="notifications-not-read">
                                                        <a href="#">
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
                                                        <a href="#">
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
                                                <a href="#"> Ver Todos <i class="icon-line-awesome-long-arrow-right"></i></a>
                                            </div>
                                        </div>

                                        <a href="#" class="header-widget-icon" uk-tooltip="title: Notificación ; pos: bottom ;offset:21">
                                            <i class="uil-bell"></i>
                                            <span>4</span>
                                        </a>

                                        <div uk-dropdown="pos: top-right;mode:click ; animation: uk-animation-slide-bottom-small" class="dropdown-notifications">
                                            <div class="dropdown-notifications-headline">
                                                <h4>Notificación </h4>
                                                <a href="#">
                                                    <i class="icon-feather-settings" uk-tooltip="title: Notifications settings ; pos: left"></i>
                                                </a>
                                            </div>
                                            <div class="dropdown-notifications-content" data-simplebar="">
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
                                                </ul>
                                            </div>
                                            <div class="dropdown-notifications-footer">
                                                <a href="#"> Ver Todos <i class="icon-line-awesome-long-arrow-right"></i> </a>
                                            </div>
                                        </div>

                                        <a href="#" class="header-widget-icon" uk-tooltip="title: Mensajes ; pos: bottom ;offset:21">
                                            <i class="uil-envelope-alt"></i>
                                            <span>1</span>
                                        </a>

                                        <div uk-dropdown=" pos: top-right;mode:click" class="dropdown-notifications">
                                            <div class="dropdown-notifications-headline">
                                                <h4>Mensajes</h4>
                                                <a href="#">
                                                    <i class="icon-feather-settings" uk-tooltip="title: Message settings ; pos: left"></i>
                                                </a>
                                            </div>

                                            <div class="dropdown-notifications-content" data-simplebar="">
                                                <ul>
                                                    <li class="notifications-not-read">
                                                        <a href="#">
                                                            <span class="notification-avatar">
                                                                <img src="..\..\assets\images\avatars\avatar-5.jpeg" alt="">
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
                                                                <img src="..\..\assets\images\avatars\avatar-5.jpeg" alt="">
                                                            </span>
                                                            <div class="notification-text notification-msg-text">
                                                                <strong>Stella Johnson</strong>
                                                                <p> Alex will explain you how to keep the HTML structure and all
                                                                    that...</p>
                                                                <span class="time-ago"> 7 hours ago </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-notifications-footer">
                                                <a href="#"> Ver Todos <i class="icon-line-awesome-long-arrow-right"></i> </a>
                                            </div>
                                        </div>

                                        <a href="#" class="header-widget-icon profile-icon">
                                            <img src="..\..\assets\images\avatars\avatar-5.jpeg" alt="" class="header-profile-icon">
                                        </a>

                                        <div uk-dropdown="pos: top-right ;mode:click" class="dropdown-notifications small">
                                            <a href="#">
                                                <div class="dropdown-user-details">
                                                    <div class="dropdown-user-avatar">
                                                        <img src="..\..\assets\images\avatars\avatar-5.jpeg" alt="">
                                                    </div>
                                                    <div class="dropdown-user-name">
                                                        <?php echo $_SESSION["usu_nom"]?> <span>Estudiante</span>
                                                    </div>
                                                </div>
                                            </a>

                                            <ul class="dropdown-user-menu">
                                                <li>
                                                    <a href="#">
                                                        <i class="icon-material-outline-dashboard"></i> Dashboard</a>
                                                </li>
                                                <li><a href="#">
                                                        <i class="icon-feather-settings"></i> Configuración</a>
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
                                    <?php
                                }else{
                                    ?>
                                        <a href="../Register/" class="btn btn-primary transition-3d-hover ml-3"> Registrate</a>
                                        <a href="../Login/" class="btn btn-info transition-3d-hover ml-3"> Acceder</a>
                                    <?php
                                }
                            ?>

                        </div>

                        <a class="uk-navbar-toggle uk-hidden@s" uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#">
                            <i class="uil-search icon-small"></i>
                        </a>

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

        <?php require_once("../MainNav/mainnav.php");?>

        <div class="page-content">
            <div class="page-content-inner">
                <div class="container-small">
                    <div class="uk-grid-large mt-lg-3" uk-grid="">
                        <div class="uk-width-1-3@m uk-width-1-2@s">
                            <div uk-sticky="offset: 70 ;bottom: true ;media @s">

                                <div uk-lightbox="">
                                    <a id="lblimage1" data-caption="Portada">
                                        <img id="lblimage2" class="uk-box-shadow-xlarge" alt="">
                                    </a>
                                    <a id="lblimage3" data-caption="Portada"> </a>
                                </div>

                                <ul class="uk-list uk-list-divider text-small mt-lg-4">
                                    <li id="lblvistos"></li>
                                    <li id="lblpublicado"></li>
                                    <li id="lbldowload"></li>
                                </ul>

                                <button class="btn btn-info">
                                    <i class="icon-feather-book-open mr-2"></i> Descargar
                                </button>

                            </div>
                        </div>

                        <div class="uk-width-2-3@m uk-width-1-2@s">
                            <h2 id="lbltitulo1"></h2>
                            <hr class="mt-0">
                            <h4> Descripción </h4>
                            <p id="lbldescripcion"></p>
                            <h4>Información</h4>
                            <p class="mb-0" id="lbltotalpag"><strong>Total de Paginas</strong>: 118</p>
                        </div>
                    </div>
                </div>
           
                <?php require_once("../MainFooter/Footer.php");?>

            </div>
        </div>
    </div>

    <?php require_once("../MainJs/mainjs.php");?>

    <script type="text/javascript" src="books-details.js"></script>
</body>
</html>