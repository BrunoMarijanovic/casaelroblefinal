@extends('layouts.template')

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