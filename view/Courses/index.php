<!doctype html>
<html lang="es">
<head>
    <title>AnderCode</>::Cursos</title>
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
                                <li><a href="#"> Dashboard </a></li>
                                <li><a href="#"> Cursos </a></li>
                                <li>Explorar Cursos</li>
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

        <div id="searchbox">
            <div class="search-overlay"></div>

            <div class="search-input-wrapper">
                <div class="search-input-container">
                    <div class="search-input-control">
                        <span class="icon-feather-x btn-close uk-animation-scale-up" uk-toggle="target: #searchbox; cls: is-active"></span>
                        <div class=" uk-animation-slide-bottom">
                            <input type="text" name="search" autofocus="" required="">
                            <p class="search-help">Escriba el nombre del curso y el libro que está buscando...</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="side-nav uk-animation-slide-left-medium">
            <div class="side-nav-bg"></div>

            <div class="logo uk-visible@s">
                <a href="index.html">
                    <i class=" uil-graduation-hat"></i>
                </a>
            </div>

            <ul>
                <li>
                    <a href="#"> <i class="uil-book-alt"></i> <span class="tooltips"> Cursos</span> </a>
                </li>
                <li>
                    <a href="#"> <i class="uil-book-alt"></i> <span class="tooltips"> Libros</span> </a>
                </li>
                <li>
                    <a href="#"> <i class="uil-book-alt"></i> <span class="tooltips"> Blog</span> </a>
                </li>
                <li>
                    <a href="#" uk-toggle="target: #searchbox; cls: is-active"><i class="uil-search-alt"></i></a>
                </li>
            </ul>

        </div>

        <div class="page-content">
            <div class="container">
                <h1>Cursos</h1>

                <div class="section-header pb-0 mt-5">
                    <div class="section-header-left">
                        <h4> Listado de <a href="#">Cursos</a> </h4>
                    </div>
                    <div class="section-header-right">

                        <a href="#" class="btn-filter" uk-tooltip="title: Course Filter ; pos:  top-right" uk-toggle="target: #course-filter">
                            <i class="icon-feather-filter"></i>
                        </a>

                        <div class="display-as">
                            <input type="hidden" id="txtfiltro" name="txtfiltro">
                            <a href="#" id="afiltro1" onClick="FilterCourses(1)" uk-tooltip="title: Grilla; pos: top-right" class="active">
                                <i class="icon-feather-grid"></i></a>
                            <a href="#" id="afiltro2" onClick="FilterCourses(2)" uk-tooltip="title: Lista; pos: top-right">
                                <i class="icon-feather-list"></i></a>
                        </div>

                    </div>
                </div>

                <div class="section-header mb-4">
                    <div class="section-header-left">
                        <nav class="responsive-tab style-4">
                            <ul>
                                <input type="hidden" id="txtnivel" name="txtnivel">
                                <li class="uk-active" id="lipopular"><a href="#" onClick="FilterCoursesNivel(1)">Mas Popular</a></li>
                                <li id="libasico"><a href="#" onClick="FilterCoursesNivel(2)">Basico</a></li>
                                <li id="liintermedio"><a href="#" onClick="FilterCoursesNivel(3)">Intermedio </a></li>
                                <li id="liavanzado"><a href="#" onClick="FilterCoursesNivel(4)">Avanzado</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div id="divlistcourses">

                </div>

                <div id="course-filter" uk-offcanvas="flip: true; overlay: true">
                    <div class="uk-offcanvas-bar">
                        <button class="uk-offcanvas-close" type="button" uk-close=""></button>
                        <div class="sidebar-filter">
                            <div class="sidebar-filter-contents">
                                <h4> Filtrar Por </h4>
                                <ul class="sidebar-filter-list" uk-accordion="multiple: true">
                                    <li class="uk-open">
                                        <a class="uk-accordion-title" href="#"> Categoria </a>
                                        <div class="uk-accordion-content">
                                            <div class="uk-form-controls">
                                                <label>
                                                    <input class="uk-radio" type="radio" name="radio1">
                                                    <span class="test"> Beginner <span> (6) </span> </span>
                                                </label>
                                                <label>
                                                    <input class="uk-radio" type="radio" name="radio1">
                                                    <span class="test"> Entermidate<span> (6) </span></span>
                                                </label>
                                                <label>
                                                    <input class="uk-radio" type="radio" name="radio1">
                                                    <span class="test"> Expert <span> (6) </span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <?php require_once("../MainFooter/Footer.php");?>

            </div>
        </div>
    </div>

    <?php require_once("../MainJs/mainjs.php");?>
    <script type="text/javascript" src="courses.js"></script>
</body>
</html>