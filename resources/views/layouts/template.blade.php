<!DOCTYPE html>
<html lang="en">
    <head>
        @yield('meta')
    </head>
    <body id="page-top">
        <!-- Navigation-->
        @yield('mainHeader')
        <!-- Masthead-->
        <header class="bg" style="background-image: url('https://casaelroble.net/public/assets/img/imgportada_.jpg');">
        </header>
        <h2 class="texto-centrado">CASA VACACIONAL EL ROBLE</h2>
        
        <!-- Imatges Section-->
        <section class="page-section portfolio" id="imatges"
            style="margin-top: -150px">
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

                    <div class="container">
                      
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                    
                            @yield('carouselImg')
                    
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        </div>
                    </div>
                    
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

        <!-- Resenas Section-->
        <section class="page-section" id="resenas">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">@lang('messages.resenas')</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row justify-content-center">

                    <div class="container">                    
                        <div id="carouselResena" class="carousel slide conatainerReviews" data-bs-ride="carousel">
                            <div class="carousel-inner" style="text-align: -webkit-center; padding-top: 20px">

                                @yield('resenas')

                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselResena" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselResena" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                    <div style="text-align: -webkit-center; padding-top: 20px; margin-bottom: -20px">
                        <a href="{{ route('create.review') }}">
                            <button class="btnCreateReview navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" 
                            type="button">
                                CREA TU RESEÑA
                                <i class="fa fa-circle-plus" style="margin-left: 10px"></i>
                            </button>
                        </a>
                    </div>

                </div>
            </div>
        </section>
        
        <!-- Contacte Section-->
        <section class="page-section bg-primary text-white mb-0" id="contacte">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">@lang('messages.contact')</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                </div>

                <div class="contact-info">
                    <div class="contact-item">
                      <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 448 512" style="fill: white"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
                      <br/>
                      <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512" style="fill: white"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"/></svg>
                    </div>
                    <div class="contact-item">
                        <h5>+34 605 94 01 58</h5>
                        <br/>
                        <h5>contacto@casaelroble.net</h5>
                    </div>
                </div>

                <br/>

                <div class="row">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d851.9592737299811!2d2.78993411931371!3d41.83873050066443!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12bb1f18d9c847a5%3A0x476b54f49371fc1a!2sCasa%20de%20alquiler%20vacacional!5e1!3m2!1ses!2ses!4v1696758521462!5m2!1ses!2ses" 
                        width="600" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </iframe>
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
        <script src="https://casaelroble.net/public/js/scripts.js"></script>
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
                window.location.href = "{{ url('/locale') }}/" + idiomaSeleccionado;
            }
        </script>

    </body>
</html>
