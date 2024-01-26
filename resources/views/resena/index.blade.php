@extends('layouts.app')

@section('template_title')
    Resena
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; align-items: center;">

                            <span id="card_title">
                                {{ __('Resena') }}
                            </span>

                             <div class="float-right" style="margin-left: 10em">
                                <a href="{{ route('resenas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        
										<th>Nombre</th>
										<th>Resena</th>
										<th>Estrellas</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($resenas as $resena)
                                        <tr>
                                            
											<td>{{ $resena->nombre }}</td>
											<td>{{ $resena->resena }}</td>
											<td>{{ $resena->estrellas }}</td>

                                            <td>
                                                <form action="{{ route('resenas.destroy',$resena->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('resenas.show',$resena->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('resenas.edit',$resena->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
