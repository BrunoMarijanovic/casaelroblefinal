@extends('layouts.app')

@section('template_title')
    {{ $servicio->name ?? "{{ __('Show') Servicio" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Servicio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('servicios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Parrafo01Es:</strong>
                            {{ $servicio->parrafo01ES }}
                        </div>
                        <div class="form-group">
                            <strong>Parrafo01Cat:</strong>
                            {{ $servicio->parrafo01CAT }}
                        </div>
                        <div class="form-group">
                            <strong>Parrafo01En:</strong>
                            {{ $servicio->parrafo01EN }}
                        </div>
                        <div class="form-group">
                            <strong>Parrafo01Fr:</strong>
                            {{ $servicio->parrafo01FR }}
                        </div>
                        <div class="form-group">
                            <strong>Parrafo02Es:</strong>
                            {{ $servicio->parrafo02ES }}
                        </div>
                        <div class="form-group">
                            <strong>Parrafo02Cat:</strong>
                            {{ $servicio->parrafo02CAT }}
                        </div>
                        <div class="form-group">
                            <strong>Parrafo02En:</strong>
                            {{ $servicio->parrafo02EN }}
                        </div>
                        <div class="form-group">
                            <strong>Parrafo02Fr:</strong>
                            {{ $servicio->parrafo02FR }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
