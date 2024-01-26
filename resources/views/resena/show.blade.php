@extends('layouts.app')

@section('template_title')
    {{ $resena->name ?? "{{ __('Show') Resena" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Resena</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('resenas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $resena->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Resena:</strong>
                            {{ $resena->resena }}
                        </div>
                        <div class="form-group">
                            <strong>Estrellas:</strong>
                            {{ $resena->estrellas }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
