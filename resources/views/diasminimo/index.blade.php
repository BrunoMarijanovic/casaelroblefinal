@extends('layouts.app')

@section('template_title')
    Diasminimo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; align-items: center;">

                            <span id="card_title">
                                {{ __('Dias minimos') }}
                            </span>

                             <div class="float-right" style="margin-left: 10em">
                                <a href="{{ route('diasminimos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo') }}
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
                                        <th>No</th>
                                        
										<th>Fecha</th>
										<th>Minimo dias</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($diasminimos as $diasminimo)
                                        <tr>
											<td>{{ $diasminimo->fecha }}</td>
											<td>{{ $diasminimo->minimodias }}</td>

                                            <td>
                                                <form action="{{ route('diasminimos.destroy',$diasminimo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('diasminimos.edit',$diasminimo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
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
