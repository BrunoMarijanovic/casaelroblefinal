@extends('layouts.app')

@section('template_title')
    {{ $norma->name ?? "{{ __('Show') Norma" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Norma</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('normas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Parrafo01Es:</strong>
                            {{ $norma->parrafo01ES }}
                        </div>
                        <div class="form-group">
                            <strong>Parrafo01Cat:</strong>
                            {{ $norma->parrafo01CAT }}
                        </div>
                        <div class="form-group">
                            <strong>Parrafo01En:</strong>
                            {{ $norma->parrafo01EN }}
                        </div>
                        <div class="form-group">
                            <strong>Parrafo01Fr:</strong>
                            {{ $norma->parrafo01FR }}
                        </div>
                        <div class="form-group">
                            <strong>Parrafo02Es:</strong>
                            {{ $norma->parrafo02ES }}
                        </div>
                        <div class="form-group">
                            <strong>Parrafo02Cat:</strong>
                            {{ $norma->parrafo02CAT }}
                        </div>
                        <div class="form-group">
                            <strong>Parrafo02En:</strong>
                            {{ $norma->parrafo02EN }}
                        </div>
                        <div class="form-group">
                            <strong>Parrafo02Fr:</strong>
                            {{ $norma->parrafo02FR }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
