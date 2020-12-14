<!doctype html>
<html lang="es">
<head>
    <title>AnderCode</>::Listado</title>
    <?php require_once("../MainHead/mainhead.php");?>
</head>

<body class="course-watch-page">
    <div id="wrapper">
        <div class="course-layouts">
            <div class="course-content bg-dark">
                <div class="course-header">
                    <a href="#" class="btn-back" uk-toggle="target: .course-layouts; cls: course-sidebar-collapse">
                        <i class="icon-feather-chevron-left"></i>
                    </a>
                    <h4 class="text-white"> Curso Angular - Proyecto : CV Online </h4>
                    <a href="https://www.youtube.com/channel/UClZiO1dvoBv1CQrMPpKL_yg?sub_confirmation=1" target="_blank" class="btn btn-danger transition-3d-hover ml-3"><i class="icon-brand-youtube"></i> Suscríbete</a>
                    <div>
                        <a href="#">
                            <i class="icon-feather-help-circle btns"></i> </a>
                        <div uk-drop="pos: bottom-right;mode : click">
                            <div class="uk-card-default p-4">
                                <h4> Curso Angular - Proyecto : CV Online</h4>
                                <p class="mt-2 mb-0 text-justify">
                                    El currículum online es una excelente herramienta para que tu curriculum destaque y para que puedas hacerte ver de una forma más eficaz. Además, atendiendo a las nuevas tendencias , y como, cada vez más, las empresas buscan a sus candidatos de forma online, poder contar con un currículum web que cuente con tu información más actualizada es una excelente herramienta en la que invertir el tiempo.
                                </p>
                            </div>
                        </div>

                        <a hred="#">
                            <i class="icon-feather-more-vertical btns"></i>
                        </a>

                        <div class="dropdown-option-nav " uk-dropdown="pos: bottom-right ;mode : click">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="icon-feather-share-2"></i>
                                        Compartir
                                    </a>
                                </li>

                                <li>
                                    <a href="#" id="night-mode" class="btn-night-mode">
                                        <i class="icon-line-awesome-lightbulb-o"></i>
                                        Noche
                                        <label class="btn-night-mode-switch">
                                            <div class="uk-switch-button"></div>
                                        </label>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="course-content-inner">
                    <ul id="video-slider" class="uk-switcher">
                        <li>
                            <div class="video-responsive">
                                <iframe src="https://www.youtube.com/embed/nkc9VXDuOTg?sub_confirmation=1" frameborder="0" uk-video="automute: true" allowfullscreen="" uk-responsive=""></iframe>
                            </div>
                        </li>
                        <li>
                            <div class="video-responsive">
                                <iframe src="https://www.youtube.com/embed/B3lPITFpLGw" frameborder="0" allowfullscreen=""></iframe>
                            </div>
                        </li>
                        <li>
                            <div class="video-responsive">
                                <iframe src="https://www.youtube.com/embed/AooFWbOAKvw" frameborder="0" allowfullscreen="" uk-responsive=""></iframe>
                            </div>
                        </li>
                        <li>
                            <div class="video-responsive">
                                <iframe src="https://www.youtube.com/embed/ZCbqlWXXiO0" frameborder="0" allowfullscreen="" uk-responsive=""></iframe>
                            </div>
                        </li>
                        <li>
                            <div class="video-responsive">
                                <iframe src="https://www.youtube.com/embed/3ppBYI-YVMw" frameborder="0" allowfullscreen="" uk-responsive=""></iframe>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="course-sidebar">
                <div class="course-sidebar-title">
                    <h3> Tabla de Contenido </h3>
                </div>
                <div class="course-sidebar-container" data-simplebar="">

                    <ul class="course-video-list-section" uk-accordion="">

                        <li class="uk-open">
                            <a class="uk-accordion-title" href="#"> Angular </a>
                            <div class="uk-accordion-content">
                                <ul class="course-video-list highlight-watched" uk-switcher=" connect: #video-slider  ; animation: uk-animation-slide-right-small, uk-animation-slide-left-medium">
                                    <li class="watched"> <a href="#"> Angular : Parte 1 <span> 20 min </span> </a> </li>
                                    <li> <a href="#"> Angular : Parte 2 <span> 15 min </span></a></li>
                                    <li> <a href="#"> Angular : Parte 3 <span> 16 min </span></a></li>
                                    <li> <a href="#"> Angular : Parte 4 <span> 17 min </span></a></li>
                                    <li> <a href="#"> Angular : Parte 5 <span> 21 min </span></a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                </div>

            </div>

        </div>

    </div>

    <script src="https://apis.google.com/js/platform.js"></script>

    <?php require_once("../MainJs/mainjs.php");?>

    <script type="text/javascript">
        $(document).ready(function () {
            window.$("#modalsub").modal("show"); 
        });
    </script>
</body>
</html>