<!doctype html>
<html lang="es">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <title>AnderCode</>::Registro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Courseplus - Professional Learning Management HTML Template">
    <!-- Favicon -->
    <link href="..\..\assets\images\favicon.png" rel="icon" type="image/png">
    <!-- CSS 
    ================================================== -->
    <link rel="stylesheet" href="..\..\assets\css\style.css">
    <link rel="stylesheet" href="..\..\assets\css\night-mode.css">
    <link rel="stylesheet" href="..\..\assets\css\framework.css">
    <link rel="stylesheet" href="..\..\assets\css\bootstrap.css"> 
    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="..\..\assets\css\icons.css">
</head>

<body>
    <!-- Content
    ================================================== -->
    <div uk-height-viewport="" class="uk-flex uk-flex-middle">
        <div class="uk-width-2-3@m uk-width-1-2@s m-auto rounded">
            <div class="uk-child-width-1-2@m uk-grid-collapse bg-gradient-grey" uk-grid="">

                <!-- column one -->
                <div class="uk-margin-auto-vertical uk-text-center uk-animation-scale-up p-3 uk-light">
                    <i class=" uil-graduation-hat icon-large"></i>
                    <h3 class="mb-4"> AnderCode</h3>
                    <p>El lugar donde puedes aprender todo. </p>
                </div>
                <!-- End column one -->
                <!-- column two -->
                <div class="uk-card-default p-5 rounded">
                    <div class="mb-4 uk-text-center">
                        <h3 class="mb-0"> Crear una nueva cuenta</h3>
                        <p class="my-2">Inicie sesión para administrar su cuenta.</p>
                    </div>

                    <form class="uk-child-width-1-1 uk-grid-small" uk-grid="" method="post" id="registro_form">

                        <div>
                            <div class="uk-form-group">
                                <label class="uk-form-label"> Nombres</label>

                                <div class="uk-position-relative w-100">
                                    <span class="uk-form-icon">
                                        <i class="icon-feather-user"></i>
                                    </span>
                                    <input class="uk-input" type="text" placeholder="Ingrese Nombres" id="usu_nom" name="usu_nom" required>
                                </div>

                            </div>
                        </div>
                        <div>
                            <div class="uk-form-group">
                                <label class="uk-form-label"> Apellidos</label>

                                <div class="uk-position-relative w-100">
                                    <span class="uk-form-icon">
                                        <i class="icon-feather-user"></i>
                                    </span>
                                    <input class="uk-input" type="text" placeholder="Ingrese Apellidos" id="usu_ape" name="usu_ape" required>
                                </div>

                            </div>
                        </div>
                        <div>
                            <div class="uk-form-group">
                                <label class="uk-form-label"> Correo Electronico</label>

                                <div class="uk-position-relative w-100">
                                    <span class="uk-form-icon">
                                        <i class="icon-feather-mail"></i>
                                    </span>
                                    <input class="uk-input" type="email" placeholder="nombre@correo.com" id="usu_correo" name="usu_correo" required>
                                </div>

                            </div>
                        </div>

                        <div class="uk-width-1-2@s">
                            <div class="uk-form-group">
                                <label class="uk-form-label"> Contraseña</label>

                                <div class="uk-position-relative w-100">
                                    <span class="uk-form-icon">
                                        <i class="icon-feather-lock"></i>
                                    </span>
                                    <input class="uk-input" type="password" placeholder="********" id="usu_pass1" name="usu_pass1" required>
                                </div>

                            </div>
                        </div>
                        <div class="uk-width-1-2@s">
                            <div class="uk-form-group">
                                <label class="uk-form-label"> Confirmar Contraseña</label>

                                <div class="uk-position-relative w-100">
                                    <span class="uk-form-icon">
                                        <i class="icon-feather-lock"></i>
                                    </span>
                                    <input class="uk-input" type="password" placeholder="********" id="usu_pass2" name="usu_pass2" required>
                                </div>

                            </div>
                        </div>

                        <div>
                            <div class="mt-4 uk-flex-middle uk-grid-small" uk-grid="">
                                <div class="uk-width-expand@s">
                                    <p> Ya tengo una cuenta <a href="..\Login">Acceder</a></p>
                                </div>
                                <div class="uk-width-auto@s">
                                    <input type="submit" name="action" id="btnguardar" class="btn btn-default" value="Registrarse">
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
                <!-- End column two -->
            </div>
        </div>
    </div>

    <!-- Content -End
    ================================================== -->
    <!-- For Night mode -->
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
    <!-- javaScripts
    ================================================== -->
    <script src="..\..\assets\js\framework.js"></script>
    <script src="..\..\assets\js\jquery-3.3.1.min.js"></script>
    <script src="..\..\assets\js\simplebar.js"></script>
    <script src="..\..\assets\js\main.js"></script>
    <script src="..\..\assets\js\bootstrap-select.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script type="text/javascript" src="register.js"></script>
</body>

</html>