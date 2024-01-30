@extends('layouts.app')

@section('template_title')
    {{ $reserva->name ?? "{{ __('Show') Reserva" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Reserva</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('reservas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha Inicio:</strong>
                            {{ $reserva->fechaInicio }}
                        </div>
                        
                        <div class="form-group">
                            <strong>Fecha Fin:</strong>
                            {{ $reserva->fechaFin }}
                        </div>
                        
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $reserva->email }}
                        </div>
                        
                        <div class="form-group">
                            <strong>Idioma:</strong>
                            {{ $reserva->getIdioma() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
