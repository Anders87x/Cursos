
<!doctype html>
<html lang="es">
<head>
    <title>AnderCode</>::Resumen</title>
    <?php require_once("../MainHead/mainhead.php");?>
</head>

<body>
    <div id="wrapper">
        <header class="header header-transparent uk-light" uk-sticky="top:20 ; cls-active:header-sticky ; cls-inactive: uk-light">
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
                                <li><a href="#">Resumen</a></li>
                                <li id="lbltitulo1"></li>
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
                    <input class="uk-search-input" type="search" placeholder="Search..." autofocus="">
                </form>
            </div>
            <a class="uk-navbar-toggle" uk-close="" uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
        </div>

        <?php require_once("../MainNav/mainnav.php");?>

        <div class="page-content">

            <div class="course-details-wrapper topic-1 uk-light pt-5">

                <div class="container p-sm-0">

                    <div uk-grid="">
                        <div class="uk-width-2-3@m">

                            <div class="course-details">
                                <h1 id="lbltitulo2"></h1>
                                <p id="lbldescripcion"> </p>

                                <div class="course-details-info mt-4">
                                    <ul>
                                        <li>
                                            <div class="star-rating"><span class="avg"> 4.9 </span> <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
                                            </div>
                                        </li>
                                        <li> <i class="icon-feather-users"></i> 1200 Enerolled </li>
                                    </ul>
                                </div>

                                <div class="course-details-info">

                                    <ul>
                                        <li> Creado por <a href="#" id="lblusu_nom"> Jonathan Madano </a> </li>
                                        <li> Ultima Actualización <a href="#"> 10/2019 </a></li>
                                    </ul>

                                </div>
                            </div>
                            <nav class="responsive-tab style-5">
                                <ul uk-switcher="connect: #course-intro-tab ;animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium">
                                    <li><a href="#">Resumen</a></li>
                                    <li><a href="#">Instructor</a></li>
                                    <li><a href="#">Comentarios</a></li>
                                </ul>
                            </nav>

                        </div>
                    </div>

                </div>
            </div>

            <div class="container">

                <div class="uk-grid-large mt-4" uk-grid="">
                    <div class="uk-width-2-3@m">
                        <ul id="course-intro-tab" class="uk-switcher mt-4">

                            <li class="course-description-content">

                                <h4> Descripción </h4>
                                <p id="lbldescripcionlar"></p>

                                <h4> Qué aprenderás</h4>
                                <div class="uk-child-width-1-2@s" uk-grid="">
                                    <div>
                                        <ul class="list-2" id="lblaprender">
                                            
                                        </ul>
                                    </div>
                                </div>

                                <h4> Requerimientos </h4>
                                <ul class="list-1">
                                    <li>Any computer will work: Windows, macOS or Linux</li>
                                    <li>Basic programming HTML and CSS.</li>
                                    <li>Basic/Minimal understanding of JavaScript</li>
                                </ul>
                            </li>

                            <li>
                                <h4> Instructor </h4>

                                <div class="user-details-card">
                                    <div class="user-details-card-avatar">
                                        <img src="..\..\assets\images\avatars\avatar-2.jpeg" alt="">
                                    </div>
                                    <div class="user-details-card-name" id="lblusuarionom">
   
                                    </div>
                                </div>

                                <article class="uk-article">
                                    <p id="lblusuario_obs"></p>
                                </article>
                            </li>

                            <li>

                                <div class="review-summary">
                                    <h4 class="review-summary-title"> Student feedback </h4>
                                    <div class="review-summary-container">
                                        <div class="review-summary-avg">
                                            <div class="avg-number">
                                                4.8
                                            </div>
                                            <div class="review-star">
                                                <div class="star-rating"><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star half"></span></div>
                                            </div>
                                            <span>Course Rating</span>
                                        </div>


                                        <div class="review-summary-rating">
                                            <div class="review-summary-rating-wrap">
                                                <div class="review-bars">
                                                    <div class="full_bar">
                                                        <div class="bar_filler" style="width:95%"></div>
                                                    </div>
                                                </div>
                                                <div class="review-stars">
                                                    <div class="star-rating"><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span></div>
                                                </div>
                                                <div class="review-avgs">
                                                    95 %
                                                </div>
                                            </div>
                                            <div class="review-summary-rating-wrap">
                                                <div class="review-bars">
                                                    <div class="full_bar">
                                                        <div class="bar_filler" style="width:80%"></div>
                                                    </div>
                                                </div>
                                                <div class="review-stars">
                                                    <div class="star-rating"><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star empty"></span>
                                                    </div>
                                                </div>
                                                <div class="review-avgs">
                                                    80 %
                                                </div>
                                            </div>
                                            <div class="review-summary-rating-wrap">
                                                <div class="review-bars">
                                                    <div class="full_bar">
                                                        <div class="bar_filler" style="width:60%"></div>
                                                    </div>
                                                </div>
                                                <div class="review-stars">
                                                    <div class="star-rating"><span class="star"></span><span class="star"></span><span class="star"></span><span class="star empty"></span><span class="star empty"></span>
                                                    </div>
                                                </div>
                                                <div class="review-avgs">
                                                    60 %
                                                </div>
                                            </div>
                                            <div class="review-summary-rating-wrap">
                                                <div class="review-bars">
                                                    <div class="full_bar">
                                                        <div class="bar_filler" style="width:45%"></div>
                                                    </div>
                                                </div>
                                                <div class="review-stars">
                                                    <div class="star-rating"><span class="star"></span><span class="star"></span><span class="star empty"></span><span class="star empty"></span><span class="star empty"></span>
                                                    </div>
                                                </div>
                                                <div class="review-avgs">
                                                    45 %
                                                </div>
                                            </div>
                                            <div class="review-summary-rating-wrap">
                                                <div class="review-bars">
                                                    <div class="full_bar">
                                                        <div class="bar_filler" style="width:25%"></div>
                                                    </div>
                                                </div>
                                                <div class="review-stars">
                                                    <div class="star-rating"><span class="star"></span><span class="star empty"></span><span class="star empty"></span><span class="star empty"></span><span class="star empty"></span>
                                                    </div>
                                                </div>
                                                <div class="review-avgs">
                                                    25 %
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>

                                <div class="comments">
                                    <h4>Reviews <span class="comments-amount"> (4610) </span> </h4>

                                    <ul>
                                        <li>
                                            <div class="comments-avatar"><img src="..\..\assets\images\avatars\avatar-2.jpeg" alt="">
                                            </div>
                                            <div class="comment-content">
                                                <div class="comment-by">Stella Johnson<span>Student</span>
                                                    <div class="comment-stars">
                                                        <div class="star-rating"><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span></div>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                                    diam
                                                    nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                    erat
                                                    volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                                    tation
                                                    ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                                    consequat.
                                                </p>
                                                <div class="comment-footer">
                                                    <span> Was this review helpful? </span>
                                                    <button> Yes </button>
                                                    <button> No </button>
                                                    <a href="#"> Report</a>
                                                </div>
                                            </div>

                                        </li>

                                        <li>
                                            <div class="comments-avatar"><img src="..\assets\images\avatars\avatar-3.jpeg" alt="">
                                            </div>
                                            <div class="comment-content">
                                                <div class="comment-by"> Adrian Mohani <span>Instructor </span>
                                                    <div class="comment-stars">
                                                        <div class="star-rating"><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star half"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p> Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                                    ullamcorper
                                                    suscipit lobortis nisl ut aliquip ex ea commodo consequat. Nam
                                                    liber
                                                    tempor cum soluta nobis eleifend
                                                </p>
                                                <div class="comment-footer">
                                                    <span> Was this review helpful? </span>
                                                    <button> Yes </button>
                                                    <button> No </button>
                                                    <a href="#"> Report</a>
                                                </div>
                                            </div>

                                        </li>

                                        <li>
                                            <div class="comments-avatar"><img src="..\assets\images\avatars\avatar-3.jpeg" alt="">
                                            </div>
                                            <div class="comment-content">
                                                <div class="comment-by"> Adrian Mohani <span>Student</span>
                                                    <div class="comment-stars">
                                                        <div class="star-rating"><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span></div>
                                                    </div>
                                                </div>
                                                <p> Nam liber tempor cum soluta nobis eleifend option congue nihil
                                                    imperdiet doming id quod mazim placerat facer possim assum.
                                                    Lorem
                                                    ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                    nonummy
                                                    nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                                    volutpat.
                                                </p>
                                                <div class="comment-footer">
                                                    <span> Was this review helpful? </span>
                                                    <button> Yes </button>
                                                    <button> No </button>
                                                    <a href="#"> Report</a>
                                                </div>
                                            </div>

                                        </li>

                                        <li>
                                            <div class="comments-avatar"><img src="..\..\assets\images\avatars\avatar-2.jpeg" alt="">
                                            </div>
                                            <div class="comment-content">
                                                <div class="comment-by">Stella Johnson<span>Student</span>
                                                    <div class="comment-stars">
                                                        <div class="star-rating"><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span></div>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                                    diam
                                                    nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                    erat
                                                    volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                                    tation
                                                    ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                                    consequat.
                                                </p>
                                                <div class="comment-footer">
                                                    <span> Was this review helpful? </span>
                                                    <button> Yes </button>
                                                    <button> No </button>
                                                    <a href="#"> Report</a>
                                                </div>
                                            </div>

                                        </li>

                                    </ul>

                                </div>

                                <div class="comments">
                                    <h3>Submit Review </h3>
                                    <ul>
                                        <li>
                                            <div class="comments-avatar"><img src="..\..\assets\images\avatars\avatar-2.jpeg" alt="">
                                            </div>
                                            <div class="comment-content">
                                                <form class="uk-grid-small" uk-grid="">
                                                    <div class="uk-width-1-2@s">
                                                        <label class="uk-form-label">Name</label>
                                                        <input class="uk-input" type="text" placeholder="Name">
                                                    </div>
                                                    <div class="uk-width-1-2@s">
                                                        <label class="uk-form-label">Email</label>
                                                        <input class="uk-input" type="text" placeholder="Email">
                                                    </div>
                                                    <div class="uk-width-1-1@s">
                                                        <label class="uk-form-label">Comment</label>
                                                        <textarea class="uk-textarea" placeholder="Enter Your Comments her..." style=" height:160px"></textarea>
                                                    </div>
                                                    <div class="uk-grid-margin">
                                                        <input type="submit" value="submit" class="btn btn-default">
                                                    </div>
                                                </form>

                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </li>

                        </ul>
                    </div>

                    <div class="uk-width-1-3@m">
                        <div class="course-card-trailer" uk-sticky="top: 10 ;offset:95 ; media: @m ; bottom:true">

                            <div class="course-thumbnail">
                                <img id="lblimage" alt="">
                                <a class="play-button-trigger show" href="#trailer-modal" uk-toggle=""> </a>
                            </div>

                            <div id="trailer-modal" uk-modal="">
                                <div class="uk-modal-dialog">
                                    <button class="uk-modal-close-default mt-2  mr-1" type="button" uk-close=""></button>
                                    <div class="uk-modal-header">
                                        <h4> Video de Presentación </h4>
                                    </div>
                                    <div class="video-responsive">
                                        <iframe src="https://www.youtube.com/embed/nOCXXHGMezU" class="uk-padding-remove" uk-video="automute: true" frameborder="0" allowfullscreen="" uk-responsive=""></iframe>
                                    </div>

                                    <div class="uk-modal-body">
                                        <h3>Build Responsive Websites </h3>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                            dolore
                                            eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                            proident,
                                            sunt
                                            in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="p-3">

                                <p class="my-3 text-center">
                                    <span class="uk-h1"> $12.99 </span>
                                    <s class="uk-h4 text-muted"> $19.99 </s>
                                    <s class="uk-h6 ml-1 text-muted"> $32.99 </s>
                                </p>

                                <div class="uk-child-width-1-2 uk-grid-small mb-4" uk-grid="">
                                    <div>
                                        <a href="course-resume.html" class="uk-width-1-1 btn btn-default transition-3d-hover"> <i class="uil-play"></i> Iniciar </a>
                                    </div>
                                    <div>
                                        <a href="course-resume.html" class="btn btn-danger uk-width-1-1 transition-3d-hover"> <i class="uil-heart"></i> Calificar </a>
                                    </div>
                                </div>

                                <p class="uk-text-bold"> Este Curso incluye </p>

                                <div class="uk-child-width-1-2 uk-grid-small" uk-grid="">
                                    <div>
                                        <span><i class="uil-youtube-alt"></i> 28 hours video</span>
                                    </div>
                                    <div>
                                        <span> <i class="uil-file-alt"></i> 12 Article </span>
                                    </div>
                                    <div>
                                        <span> <i class="uil-award"></i> Certificado </span>
                                    </div>
                                    <div>
                                        <span> <i class="uil-video"></i> Ver Online </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <?php require_once("../MainFooter/Footer.php");?>

            </div>
        </div>

    </div>

    <?php require_once("../MainJs/mainjs.php");?>

    <script type="text/javascript" src="resume.js"></script>
</body>

</html>