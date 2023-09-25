@extends('layouts.app')

@section('template_title')
    Img
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Img') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('imgs.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        
										<th>Imagen</th>
										<th>Tituloes</th>
										<th>Titulocat</th>
										<th>Tituloen</th>
										<th>Titulofr</th>
										<th>Descripciones</th>
										<th>Descripcioncat</th>
										<th>Descripcionen</th>
										<th>Descripcionfr</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($imgs as $img)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>
                                                <img width="250" src="{{ $img->imagen }}" alt="{{ $img->tituloES }}" />
                                            </td>
											<td>{{ $img->tituloES }}</td>
											<td>{{ $img->tituloCAT }}</td>
											<td>{{ $img->tituloEN }}</td>
											<td>{{ $img->tituloFR }}</td>
											<td>{{ $img->descripcionES }}</td>
											<td>{{ $img->descripcionCAT }}</td>
											<td>{{ $img->descripcionEN }}</td>
											<td>{{ $img->descripcionFR }}</td>

                                            <td>
                                                <form action="{{ route('imgs.destroy',$img->id) }}" method="POST">
                                                    <!-- <a class="btn btn-sm btn-primary " href="{{ route('imgs.show',$img->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('imgs.edit',$img->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a> -->
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
                {!! $imgs->links() !!}
            </div>
        </div>
    </div>
@endsection
