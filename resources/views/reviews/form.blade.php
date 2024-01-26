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
                <h2 class="page-section-heading text-center text-uppercase text-white">@lang('messages.rules')</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
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
        </script>
    
    </body>

</html>
