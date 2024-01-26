<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Casa el roble</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="https://casaelroble.net/public/assets/img/logoCasa.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="http://localhost/proyectoCasaelroble/public/css/styles.css" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/locale/es.js"></script>
    </head>
    <body id="page-top">

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="{{ route('index') }}">
                    <img src="https://casaelroble.net/public/assets/img/logoCasaPortada.png" 
                        alt="LogoCasaRoble"
                        style="height: 4em">
                </a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    @lang('messages.menu')
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#imatges">@lang('messages.home')</a></li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <select id="idioma" name="idioma" class="nav-link py-3 px-0 px-lg-3 rounded"
                            onchange="cambiarIdioma(this);">
                            <option class="nav-link py-3 px-0 px-lg-3 rounded" 
                                value="ca" @if(app()->getLocale() == 'ca') selected @endif>Català</option>

                            <option class="nav-link py-3 px-0 px-lg-3 rounded" 
                                value="es" @if(app()->getLocale() == 'es') selected @endif>Español</option>

                            <option class="nav-link py-3 px-0 px-lg-3 rounded" 
                                value="en" @if(app()->getLocale() == 'en') selected @endif>English</option>

                            <option class="nav-link py-3 px-0 px-lg-3 rounded" 
                                value="fr" @if(app()->getLocale() == 'fr') selected @endif>Francés</option>
                        </select>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Normes Section-->
        <section class="page-section bg-primary text-white mb-0" id="normes">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">@lang('messages.createYourReview')</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                </div>

                <!-- Presentación -->
                <p style="text-align: justify">
                    Muchas gracias por tu estancia en Casa el Roble, espero que hayas disfrutado mucho durante tu estadía.
                    <br/>
                    Nos ayudaría mucho saber tu opinión para poderos dar un mejor servicio a los próximos huéspedes o a vosotros si decidís volver.
                </p>

                <br/>

                <form method="POST" action="{{ route('send.review') }}"  role="form" enctype="multipart/form-data">
                    @csrf
                    <!-- Pregunta 1 -->
                    <h3>Relación calidad - precio:</h3>
                    <p style="text-align: justify">
                        La relación calidad/precio se ha adecuado a tus expectativas?
                    </p>
                    <select class="form-control" name="calidadPrecio[]" id="calidadPrecio">
                        <option value="0" selected disabled hidden>Selecciona una opción</option>
                        <option value="5">Excelente</option>
                        <option value="4">Buena</option>
                        <option value="3">Justa</option>
                        <option value="2">Mala</option>
                        <option value="1">Muy mala</option>
                    </select>

                    <br/>
                    <br/>

                    <!-- Pregunta 2 -->
                    <h3>Trato personal:</h3>
                    <p style="text-align: justify">
                        La persona que te ha recibido ha sido amable y correcto?
                    </p>
                    <select class="form-control" name="tratoPersonal[]" id="tratoPersonal">
                        <option value="0" selected disabled hidden>Selecciona una opción</option>
                        <option value="5">Excelente</option>
                        <option value="4">Bueno</option>
                        <option value="3">Normal</option>
                        <option value="2">Malo</option>
                        <option value="1">Muy malo</option>
                    </select>
                    
                    <br/>
                    <br/>

                    <!-- Pregunta 3 -->
                    <h3>Ubicación:</h3>
                    <p style="text-align: justify">
                        Que te ha parecido la ubicación? Te ha resultado fácil llegar al destino?
                    </p>
                    <select class="form-control" name="ubicacion[]" id="ubicacion">
                        <option value="0" selected disabled hidden>Selecciona una opción</option>
                        <option value="5">Muy fácil</option>
                        <option value="4">Fácil</option>
                        <option value="3">Normal</option>
                        <option value="2">Difícil</option>
                        <option value="1">Muy difícil</option>
                    </select>
                    
                    <br/>
                    <br/>

                    <!-- Pregunta 4 -->
                    <h3>Instalaciones y servicios:</h3>
                    <p style="text-align: justify">
                        Las instalaciones de la casa han sido correctos?
                    </p>
                    <select class="form-control" name="instalacionesServicios[]" id="instalacionesServicios">
                        <option value="0" selected disabled hidden>Selecciona una opción</option>
                        <option value="5">Excelente</option>
                        <option value="4">Bueno</option>
                        <option value="3">Normal</option>
                        <option value="2">Malo</option>
                        <option value="1">Muy malo</option>
                    </select>
                    
                    <br/>
                    <br/>

                    <!-- Pregunta 5 -->
                    <h3>Limpieza:</h3>
                    <p style="text-align: justify">
                        Al llegar a la casa, esta la encontraste límpia?
                    </p>
                    <select class="form-control" name="instalacionesServicios[]" id="instalacionesServicios">
                        <option value="0" selected disabled hidden>Selecciona una opción</option>
                        <option value="5">Excelente</option>
                        <option value="4">Buena</option>
                        <option value="3">Justa</option>
                        <option value="2">Mala</option>
                        <option value="1">Muy mala</option>
                    </select>

                    <br/>
                    <br/>
                    
                    <h3>Comentario:</h3>
                    <textarea name="Notas" rows="4" cols="20" class="form-control"></textarea>

                    <br/>
                    
                    <div class="box-footer mt20" style="text-align: center">
                        <button type="submit" class="btn btn-primary btn-lg btn-block btnSend"
                            onclick="return confirmSubmit()">ENVIAR</button>
                    </div>

                </form>
            </div>
        </section>

        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">@lang('messages.localitzation')</h4>
                        <p class="lead mb-0">
                            Empurda 8b, Urb. Llac del Cigne
                            <br />
                            Caldes de Malavella, Girona
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>&copy; @yield('anoActual') Casa el roble</small></div>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="https://casaelroble.net/public/js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

        <script>
            function cambiarIdioma(select) {
                var idiomaSeleccionado = select.value;
                // Redirigir a la URL correspondiente usando JavaScript
                window.location.href = "{{ url('/locale') }}/" + idiomaSeleccionado;
            }

            function confirmSubmit() {
                return confirm("Tu reseña se validarà por uno de nuestros administradores\n¿Quieres enviar tu reseña?");
            }
        </script>
    
    </body>

</html>
