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
                            <strong>Habilitado:</strong>
                            @if ($resena->habilitado == 0)
                                NO
                            @else
                                SÍ
                            @endIf
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $resena->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $resena->email }}
                        </div>
                        <div class="form-group">
                            <strong>Calidad precio:</strong>
                            {{ $resena->calidadPrecio }} / 5
                        </div>
                        <div class="form-group">
                            <strong>Trato personal:</strong>
                            {{ $resena->tratoPersonal }} / 5
                        </div>
                        <div class="form-group">
                            <strong>Ubicacion:</strong>
                            {{ $resena->ubicacion }} / 5
                        </div>
                        <div class="form-group">
                            <strong>Instlaciones y servicios:</strong>
                            {{ $resena->instalacionServicios }} / 5
                        </div>
                        <div class="form-group">
                            <strong>Limpieza:</strong>
                            {{ $resena->limpieza }} / 5
                        </div>
                        <div class="form-group">
                            <strong>Comentario:</strong>
                            {{ $resena->comentario }}
                        </div>
                        <div class="form-group">
                            <strong>Nota final:</strong>
                            {{ $resena->notaFinal }} / 10
                        </div>
                        <br/>
                        @if ($resena->habilitado == 0)
                            <a class="btn btn-sm btn-primary " href="{{ route('resenas.show',$resena->id) }}"><i class="fa fa-fw fa-eye"></i> <button>{{ __('Habilitar') }}</button></a>
                        @else
                            <a class="btn btn-sm btn-primary " href="{{ route('resenas.show',$resena->id) }}"><i class="fa fa-fw fa-eye"></i> <button>{{ __('Deshabilitar') }}</button></a>
                        @endIf
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
