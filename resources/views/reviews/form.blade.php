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
                    @lang('messages.explainReview')
                </p>

                <form method="POST" action="{{ route('send.review') }}"  role="form" enctype="multipart/form-data">
                    @csrf

                    @if (session('succes'))
                        <div class="alert alert-primary">
                            {{ session('succes') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="nombre">@lang('messages.name')</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <label for="email">@lang('messages.email')</label>
                        <input type="text" name="email" id="email" value="{{ old('email') }}">
                    </div>

                    @if (session('message'))
                        <div class="alert alert-danger">
                            {{ session('message') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <br/>
                    <!-- Pregunta 1 -->
                    <h3>@lang('messages.valueForMoney')</h3>
                    <p style="text-align: justify">
                        @lang('messages.explainValueMoney')
                    </p>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary reveiwOption">
                            <input type="radio" name="calidadPrecio" value="5" 
                                {{ old('calidadPrecio') == '5' ? 'checked' : '' }}> 😊 @lang('messages.excellent')
                        </label>
                        <label class="btn btn-outline-primary reveiwOption">
                            <input type="radio" name="calidadPrecio" value="4"
                                {{ old('calidadPrecio') == '4' ? 'checked' : '' }}> 🙂 @lang('messages.buena')
                        </label>
                        <label class="btn btn-outline-primary reveiwOption">
                            <input type="radio" name="calidadPrecio" value="3"
                                {{ old('calidadPrecio') == '3' ? 'checked' : '' }}> 😐 @lang('messages.justa')
                        </label>
                        <label class="btn btn-outline-primary reveiwOption">
                            <input type="radio" name="calidadPrecio" value="2"
                                {{ old('calidadPrecio') == '2' ? 'checked' : '' }}> 😕 @lang('messages.mala')
                        </label>
                        <label class="btn btn-outline-primary reveiwOption">
                            <input type="radio" name="calidadPrecio" value="1"
                                {{ old('calidadPrecio') == '1' ? 'checked' : '' }}> ☹️ @lang('messages.muyMala')
                        </label>
                    </div>

                    <br/><br/>

                    <!-- Pregunta 2 -->
                    <h3>@lang('messages.personalCare')</h3>
                    <p style="text-align: justify">
                        @lang('messages.explainPersonalCare')
                    </p>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary reveiwOption">
                            <input type="radio" name="tratoPersonal" value="5"
                                {{ old('tratoPersonal') == '5' ? 'checked' : '' }}> 😊 @lang('messages.excellent')
                        </label>
                        <label class="btn btn-outline-primary reveiwOption">
                            <input type="radio" name="tratoPersonal" value="4"
                                {{ old('tratoPersonal') == '4' ? 'checked' : '' }}> 🙂 @lang('messages.bueno')
                        </label>
                        <label class="btn btn-outline-primary reveiwOption">
                            <input type="radio" name="tratoPersonal" value="3"
                                {{ old('tratoPersonal') == '3' ? 'checked' : '' }}> 😐 @lang('messages.normal')
                        </label>
                        <label class="btn btn-outline-primary reveiwOption">
                            <input type="radio" name="tratoPersonal" value="2"
                                {{ old('tratoPersonal') == '2' ? 'checked' : '' }}> 😕 @lang('messages.malo')
                        </label>
                        <label class="btn btn-outline-primary reveiwOption">
                            <input type="radio" name="tratoPersonal" value="1"
                                {{ old('tratoPersonal') == '1' ? 'checked' : '' }}> ☹️ @lang('messages.muyMalo')
                        </label>
                    </div>
                    
                    <br/><br/>

                    <!-- Pregunta 3 -->
                    <h3>@lang('messages.location')</h3>
                    <p style="text-align: justify">
                        @lang('messages.explainLocation')
                    </p>                    
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary reveiwOption">
                            <input type="radio" name="ubicacion" value="5"
                                {{ old('ubicacion') == '5' ? 'checked' : '' }}> 😊 @lang('messages.muyFacil')
                        </label>
                        <label class="btn btn-outline-primary reveiwOption">
                            <input type="radio" name="ubicacion" value="4"
                                {{ old('ubicacion') == '4' ? 'checked' : '' }}> 🙂 @lang('messages.facil')
                        </label>
                        <label class="btn btn-outline-primary reveiwOption">
                            <input type="radio" name="ubicacion" value="3"
                                {{ old('ubicacion') == '3' ? 'checked' : '' }}> 😐 @lang('messages.normal')
                        </label>
                        <label class="btn btn-outline-primary reveiwOption">
                            <input type="radio" name="ubicacion" value="2"
                                {{ old('ubicacion') == '2' ? 'checked' : '' }}> 😕 @lang('messages.dificil')
                        </label>
                        <label class="btn btn-outline-primary reveiwOption">
                            <input type="radio" name="ubicacion" value="1"
                                {{ old('ubicacion') == '1' ? 'checked' : '' }}> ☹️ @lang('messages.muyDificil')
                        </label>
                    </div>
                    
                    <br/><br/>

                    <!-- Pregunta 4 -->
                    <h3>@lang('messages.facilitiesAnaServices')</h3>
                    <p style="text-align: justify">
                        @lang('messages.explainFacilitiesAnaServices')
                    </p>                
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary reveiwOption">
                            <input type="radio" name="instalacionesServicios" value="5"
                                {{ old('instalacionesServicios') == '5' ? 'checked' : '' }}> 😊 @lang('messages.excellent')
                        </label>
                        <label class="btn btn-outline-primary reveiwOption">
                            <input type="radio" name="instalacionesServicios" value="4"
                                {{ old('instalacionesServicios') == '4' ? 'checked' : '' }}> 🙂 @lang('messages.bueno')
                        </label>
                        <label class="btn btn-outline-primary reveiwOption">
                            <input type="radio" name="instalacionesServicios" value="3"
                                {{ old('instalacionesServicios') == '3' ? 'checked' : '' }}> 😐 @lang('messages.normal')
                        </label>
                        <label class="btn btn-outline-primary reveiwOption">
                            <input type="radio" name="instalacionesServicios" value="2"
                                {{ old('instalacionesServicios') == '2' ? 'checked' : '' }}> 😕 @lang('messages.malo')
                        </label>
                        <label class="btn btn-outline-primary reveiwOption">
                            <input type="radio" name="instalacionesServicios" value="1"
                                {{ old('instalacionesServicios') == '1' ? 'checked' : '' }}> ☹️ @lang('messages.muyMalo')
                        </label>
                    </div>
                    
                    <br/><br/>

                    <!-- Pregunta 5 -->
                    <h3>@lang('messages.cleaning')</h3>
                    <p style="text-align: justify">
                        @lang('messages.explainCleaning')
                    </p>            
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary reveiwOption">
                            <input type="radio" name="limpieza" value="5"
                                {{ old('limpieza') == '5' ? 'checked' : '' }}> 😊 @lang('messages.excellent')
                        </label>
                        <label class="btn btn-outline-primary reveiwOption">
                            <input type="radio" name="limpieza" value="4"
                                {{ old('limpieza') == '4' ? 'checked' : '' }}> 🙂 @lang('messages.buena')
                        </label>
                        <label class="btn btn-outline-primary reveiwOption">
                            <input type="radio" name="limpieza" value="3"
                                {{ old('limpieza') == '3' ? 'checked' : '' }}> 😐 @lang('messages.justa')
                        </label>
                        <label class="btn btn-outline-primary reveiwOption">
                            <input type="radio" name="limpieza" value="2"
                                {{ old('limpieza') == '2' ? 'checked' : '' }}> 😕 @lang('messages.mala')
                        </label>
                        <label class="btn btn-outline-primary reveiwOption">
                            <input type="radio" name="limpieza" value="1"
                                {{ old('limpieza') == '1' ? 'checked' : '' }}> ☹️ @lang('messages.muyMala')
                        </label>
                    </div>

                    <br/><br/>
                    
                    <h3>@lang('messages.comment')</h3>
                    <textarea name="comentario" rows="4" cols="20" class="form-control"></textarea>

                    <br/>
                    
                    <div class="box-footer mt20" style="text-align: center">
                        <button type="submit" class="btn btn-primary btn-lg btn-block btnSend"
                            onclick="return confirmSubmit()">@lang('messages.send')</button>
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
                var warningReviewMessage = "{!! html_entity_decode(__('messages.warningReview')) !!}";

                return confirm(warningReviewMessage);
            }
        </script>
    
    </body>

</html>
