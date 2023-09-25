<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Casa el roble</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

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
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">CASA EL ROBLE</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    @lang('messages.menu')
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#imatges">@lang('messages.images')</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#serveis">@lang('messages.service')</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#dates">@lang('messages.availableDates')</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#normes">@lang('messages.rules')</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contacte">@lang('messages.contact')</a></li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <select id="idioma" name="idioma" class="nav-link py-3 px-0 px-lg-3 rounded"
                            onchange="cambiarIdioma(this);">
                            <option class="nav-link py-3 px-0 px-lg-3 rounded" 
                                value="ca" @if(app()->getLocale() == 'ca') selected @endif >Català</option>

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
        <!-- Masthead-->
        <header class="bg" style="background-image: url('assets/img/imgportada_.jpg');">
            
        </header>
        
        <!-- Imatges Section-->
        <section class="page-section portfolio" id="imatges">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">@lang('messages.images')</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <!-- <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div> -->
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">

                    <!-- Acá mostramos todas las imagenes de la BBDD -->
                    @yield('imagenes')
                    
                </div>
            </div>
        </section>

        <!-- Serveis Section-->
        <section class="page-section bg-primary text-white mb-0" id="serveis">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">@lang('messages.service')</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                @yield('servicios')
            </div>
        </section>
        
        <!-- Dates Section-->
        <section class="page-section portfolio" id="dates">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">@lang('messages.availableDates')</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                </div>

                <div id="calendar">
                </div>
            
            </div>
        </section>
        
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
                @yield('normativa')
            </div>
        </section>
        
        <!-- Contacte Section-->
        <section class="page-section portfolio" id="contacte">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">@lang('messages.contact')</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                </div>

                <div class="contact-info">
                    <div class="contact-item">
                      <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
                      <br/>
                      <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"/></svg>
                    </div>
                    <div class="contact-item">
                        <h5>+34 605 94 01 58</h5>
                        <br/>
                        <h5>contacto@casaelroble.net</h5>
                    </div>
                </div>

                <br/>

                <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d743.0962774506245!2d2.7805869697059418!3d41.841535097316026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1ses!2ses!4v1694281271889!5m2!1ses!2ses" 
                    width="600" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
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
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

        <script>
            var idiomaActual = "{{ app()->getLocale() }}";


            $(document).ready(function() {
                $('#calendar').fullCalendar({
                    header: {
                        left: 'title',
                        center: '',
                        right: 'prev,next today'
                    },
                    locale: idiomaActual,
                    firstDay: 1,
                    defaultView: 'month',
                    events: {!! $json !!}
                })
            });
        </script>

        <script>
            function cambiarIdioma(select) {
                var idiomaSeleccionado = select.value;
                // Redirigir a la URL correspondiente usando JavaScript
                window.location.href = "{{ url('locale') }}/" + idiomaSeleccionado;
            }
        </script>

    </body>
</html>
