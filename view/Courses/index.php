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
                                <li><a href="#">Cursos</a></li>
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
                            <a href="#" uk-tooltip="title: Lista; pos: top-right">
                                <i class="icon-feather-grid"></i></a>
                            <a href="#" class="active" uk-tooltip="title: Grilla; pos: top-right">
                                <i class="icon-feather-list"></i></a>
                        </div>
 
                        <select class="selectpicker ml-3">
                            <option value="0"> Nuevos </option>
                            <option value="1"> Populares</option>
                        </select>
                    </div>
                </div>

                <div class="section-small">

                    <div class="uk-child-width-1-4@m uk-child-width-1-3@s course-card-grid uk-grid-match" uk-grid="">
                        <div><!-- 1 Angular-->
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
                        </div>
                        <div><!-- 2 PHP SQL-->
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
                        </div>
                        <div><!-- 3 Git y GitHub-->
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
                        </div>
                        <div><!-- 4 PHP MYSQL-->
                            <a href="4.html" target="_blank">
                                <div class="course-card">
                                    <div class="course-card-thumbnail ">
                                        <img src="..\..\assets\images\course\phpmysql.JPG">
                                        <span class="play-button-trigger"></span>
                                    </div>
                                    <div class="course-card-body">
                                        <div class="course-card-info">
                                            <div>
                                                <span class="catagroy">PHP y MySQL</span>
                                            </div>
                                            <div>
                                                <i class="icon-feather-bookmark icon-small"></i>
                                            </div>
                                        </div>
                                        <h4>Curso PHP y MySql</h4>
                                        <p> Realizar un control documentario Online...</p>
                                        <div class="course-card-footer">
                                            <h5> <i class="icon-feather-film"></i> 14 Videos </h5>
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div><!-- 5 Html5-->
                            <a href="5.html" target="_blank">
                                <div class="course-card">
                                    <div class="course-card-thumbnail">
                                        <img src="..\..\assets\images\course\html5.jpg">
                                        <span class="play-button-trigger"></span>
                                    </div>
                                    <div class="course-card-body">
                                        <div class="course-card-info">
                                            <div>
                                                <span class="catagroy">Dashboard HTML</span>
                                            </div>
                                            <div>
                                                <i class="icon-feather-bookmark icon-small"></i>
                                            </div>
                                        </div>
                                        <h4>Templates HTML</h4>
                                        <p> Descarga los mejores templates HTML para tus proyectos...</p>
                                        <div class="course-card-footer">
                                            <h5> <i class="icon-feather-film"></i> 4 Videos </h5>
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div><!-- 6 Laravel-->
                            <a href="6.html" target="_blank">
                                <div class="course-card">
                                    <div class="course-card-thumbnail ">
                                        <img src="..\..\assets\images\course\laravel.JPG">
                                        <span class="play-button-trigger"></span>
                                    </div>
                                    <div class="course-card-body">
                                        <div class="course-card-info">
                                            <div>
                                                <span class="catagroy">Dashboard Laravel</span>
                                            </div>
                                            <div>
                                                <i class="icon-feather-bookmark icon-small"></i>
                                            </div>
                                        </div>
                                        <h4>Templates Laravel</h4>
                                        <p> Aprende a migrar cualquier template a LARAVEL...</p>
                                        <div class="course-card-footer">
                                            <h5> <i class="icon-feather-film"></i> 2 Videos </h5>
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div id="course-filter" uk-offcanvas="flip: true; overlay: true">
                    <div class="uk-offcanvas-bar">

                        <button class="uk-offcanvas-close" type="button" uk-close=""></button>

                        <div class="sidebar-filter">

                            <div class="sidebar-filter-contents">

                                <h4> Filtrar Por </h4>

                                <ul class="sidebar-filter-list" uk-accordion="multiple: true">

                                    <li class="uk-open">
                                        <a class="uk-accordion-title" href="#"> Skill Levels </a>
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

                                    <li class="uk-open">
                                        <a class="uk-accordion-title" href="#"> Tipo de Curso </a>
                                        <div class="uk-accordion-content">
                                            <div class="uk-form-controls">
                                                <label>
                                                    <input class="uk-radio" type="radio" name="radio2">
                                                    <span class="test"> Free (42) </span>
                                                </label>
                                                <label>
                                                    <input class="uk-radio" type="radio" name="radio2">
                                                    <span class="test"> Paid </span>
                                                </label>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="uk-open">
                                        <a class="uk-accordion-title" href="#"> Duration time </a>
                                        <div class="uk-accordion-content">
                                            <div class="uk-form-controls">
                                                <label>
                                                    <input class="uk-radio" type="radio" name="radio3">
                                                    <span class="test"> +5 Hourse (23) </span>
                                                </label>
                                                <label>
                                                    <input class="uk-radio" type="radio" name="radio3">
                                                    <span class="test"> +10 Hourse (12)</span>
                                                </label>
                                                <label>
                                                    <input class="uk-radio" type="radio" name="radio3">
                                                    <span class="test"> +20 Hourse (5)</span>
                                                </label>
                                                <label>
                                                    <input class="uk-radio" type="radio" name="radio3">
                                                    <span class="test"> +30 Hourse (2)</span>
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
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
        </div>
    </div>

    <?php require_once("../MainJs/mainjs.php");?>
</body>
</html>