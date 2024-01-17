@extends('layouts.app')

@section('template_title')
    {{ $diasminimo->name ?? "{{ __('Show') Diasminimo" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Dias Minimos</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('diasminimos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $diasminimo->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Minimodias:</strong>
                            {{ $diasminimo->minimodias }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
