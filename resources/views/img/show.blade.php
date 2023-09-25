@extends('layouts.app')

@section('template_title')
    {{ $img->name ?? "{{ __('Show') Img" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Img</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('imgs.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $img->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Tituloes:</strong>
                            {{ $img->tituloES }}
                        </div>
                        <div class="form-group">
                            <strong>Titulocat:</strong>
                            {{ $img->tituloCAT }}
                        </div>
                        <div class="form-group">
                            <strong>Tituloen:</strong>
                            {{ $img->tituloEN }}
                        </div>
                        <div class="form-group">
                            <strong>Titulofr:</strong>
                            {{ $img->tituloFR }}
                        </div>
                        <div class="form-group">
                            <strong>Descripciones:</strong>
                            {{ $img->descripcionES }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcioncat:</strong>
                            {{ $img->descripcionCAT }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcionen:</strong>
                            {{ $img->descripcionEN }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcionfr:</strong>
                            {{ $img->descripcionFR }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
