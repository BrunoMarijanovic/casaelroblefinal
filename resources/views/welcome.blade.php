@extends('layouts.template')

@section('imagenes')

@foreach ($imgs as $img)    
    <!-- Item-->
    <div class="col-md-6 col-lg-4 mb-5">
        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#index{{ $img->id }}">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
            </div>
            <img class="img-fluid" src="{{ $img->imagen }}" alt="{{ $img->tituloES }}" />
        </div>
    </div>

    <!-- Modals-->
    <div class="portfolio-modal modal fade" id="index{{ $img->id }}" tabindex="-1" aria-labelledby="index{{ $img->id }}" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <!-- Portfolio Modal - Title-->
                        @if(app()->getLocale() == 'ca')
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">{{ $img->tituloCAT }}</h2>
                        @elseif(app()->getLocale() == 'es')
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">{{ $img->tituloES }}</h2>
                        @elseif(app()->getLocale() == 'fr')
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">{{ $img->tituloFR }}</h2>
                        @else
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">{{ $img->tituloEN }}</h2>
                        @endif
                        <!-- Icon Divider-->
                        <div class="divider-custom">
                            <div class="divider-custom-line"></div>
                        </div>
                        <!-- Portfolio Modal - Image-->
                        <img class="img-fluid rounded mb-5" src="{{ $img->imagen }}" alt="{{ $img->tituloES }}" />
                        <!-- Portfolio Modal - Text-->
                        @if(app()->getLocale() == 'ca')
                        <p class="mb-4">{{ $img->descripcionCAT }}</p>
                        @elseif(app()->getLocale() == 'es')
                        <p class="mb-4">{{ $img->descripcionES }}</p>
                        @elseif(app()->getLocale() == 'fr')
                        <p class="mb-4">{{ $img->descripcionFR }}</p>
                        @else
                        <p class="mb-4">{{ $img->descripcionEN }}</p>
                        @endif
                        <button class="btn btn-primary" data-bs-dismiss="modal">
                            <i class="fas fa-xmark fa-fw"></i>
                            @lang('messages.close')
                        </button>
                    </div>
                </div>
            </div>
        </div>
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