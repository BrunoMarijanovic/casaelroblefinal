@extends('layouts.template')

@section('meta')
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="Descubre nuestra casa vacacional cerca de PGA Catalunya con piscina de sal, parque infantil, canasta de baloncesto, área de pimpon, dardos, WiFi gratuito, parking incluido, barbacoa, bicicletas y más. Ideal para golfistas en busca de una estancia cómoda y relajante cerca del campo de golf PGA." />
<meta name="author" content="" />
<title>Casa el Roble - Cerca de PGA Catalunya Girona con Piscina de Sal y Servicios de Ocio</title>
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
@endsection

@section('mainHeader')
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top">
            <img src="https://casaelroble.net/public/assets/img/logoCasaPortada.png" 
                alt="LogoCasaRoble"
                style="height: 4em">
        </a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" 
                type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" 
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"
                id="toggle-menu">
            @lang('messages.menu')
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#imatges" onclick="toggleMenu()">@lang('messages.images')</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#serveis" onclick="toggleMenu()">@lang('messages.service')</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#dates" onclick="toggleMenu()">@lang('messages.availableDates')</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#normes" onclick="toggleMenu()">@lang('messages.rules')</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#resenas" onclick="toggleMenu()">@lang('messages.resenas')</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contacte" onclick="toggleMenu()">@lang('messages.contact')</a></li>
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

<script>
    function toggleMenu() {
        // Cierra el menú si está abierto
        var menuToggle = document.getElementById('toggle-menu');
        if (menuToggle.getAttribute('aria-expanded') === 'true') {
            var bootstrapMenu = new bootstrap.Collapse(document.getElementById('navbarResponsive'), {
                toggle: false
            });
            bootstrapMenu.toggle();
        }
    }
</script>
@endsection


@section('carouselImg')

    @foreach($imgs as $key => $img)
        <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
            <a href="{{ $img->imagen }}" target="_blank">
                <img src="{{ $img->imagen }}" class="d-block w-100 img-reducida" alt="{{ $img->tituloES }}">
            </a>
        </div>
    @endforeach

@endsection

@section('normativa')

@foreach ($normas as $norma)
    <div class="row">
        @if(app()->getLocale() == 'ca')
        <div class="col-lg-4 ms-auto"><p class="lead">{{ $norma->parrafo01CAT }}</p></div>
        <div class="col-lg-4 me-auto"><p class="lead">{{ $norma->parrafo02CAT }}</p></div>
        @elseif(app()->getLocale() == 'es')
        <div class="col-lg-4 ms-auto"><p class="lead">{{ $norma->parrafo01ES }}</p></div>
        <div class="col-lg-4 me-auto"><p class="lead">{{ $norma->parrafo02ES }}</p></div>
        @elseif(app()->getLocale() == 'fr')
        <div class="col-lg-4 ms-auto"><p class="lead">{{ $norma->parrafo01FR }}</p></div>
        <div class="col-lg-4 me-auto"><p class="lead">{{ $norma->parrafo02FR }}</p></div>
        @else
        <div class="col-lg-4 ms-auto"><p class="lead">{{ $norma->parrafo01EN }}</p></div>
        <div class="col-lg-4 me-auto"><p class="lead">{{ $norma->parrafo02EN }}</p></div>
        @endif
    </div>
@endforeach

@endsection


@section('servicios')

@foreach ($servicios as $servicio)
    <div class="row">
        @if(app()->getLocale() == 'ca')
        <div class="col-lg-4 ms-auto"><p class="lead">{{ $servicio->parrafo01CAT }}</p></div>
        <div class="col-lg-4 me-auto"><p class="lead">{{ $servicio->parrafo02CAT }}</p></div>
        @elseif(app()->getLocale() == 'es')
        <div class="col-lg-4 ms-auto"><p class="lead">{{ $servicio->parrafo01ES }}</p></div>
        <div class="col-lg-4 me-auto"><p class="lead">{{ $servicio->parrafo02ES }}</p></div>
        @elseif(app()->getLocale() == 'fr')
        <div class="col-lg-4 ms-auto"><p class="lead">{{ $servicio->parrafo01FR }}</p></div>
        <div class="col-lg-4 me-auto"><p class="lead">{{ $servicio->parrafo02FR }}</p></div>
        @else
        <div class="col-lg-4 ms-auto"><p class="lead">{{ $servicio->parrafo01EN }}</p></div>
        <div class="col-lg-4 me-auto"><p class="lead">{{ $servicio->parrafo02EN }}</p></div>
        @endif
    </div>
@endforeach

@endsection

@section('jsonDate')

$json

@endsection

@section('anoActual')
    {{ now()->year }}
@endsection

@section('resenas')

@foreach ($resenas as $key => $resena)

    <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
        <div class="user-review">
            <div class="review-header">
                <h3>{{ $resena->nombre }} <i class="fa fa-star"></i></h3>
                <div class="rating-box">
                    <span class="rating">{{ $resena->notaFinal }}/10</span>
                </div>
            </div>
            <p class="comment">{{ $resena->comentario }}</p>
        </div>
    </div>

@endforeach

@endsection