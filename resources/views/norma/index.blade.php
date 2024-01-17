@extends('layouts.app')

@section('template_title')
    Norma
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Norma') }}
                            </span>

                             <!-- <div class="float-right">
                                <a href="{{ route('normas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div> -->
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
                                        
										<th>Parrafo01Es</th>
										<th>Parrafo01Cat</th>
										<th>Parrafo01En</th>
										<th>Parrafo01Fr</th>
										<th>Parrafo02Es</th>
										<th>Parrafo02Cat</th>
										<th>Parrafo02En</th>
										<th>Parrafo02Fr</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($normas as $norma)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $norma->parrafo01ES }}</td>
											<td>{{ $norma->parrafo01CAT }}</td>
											<td>{{ $norma->parrafo01EN }}</td>
											<td>{{ $norma->parrafo01FR }}</td>
											<td>{{ $norma->parrafo02ES }}</td>
											<td>{{ $norma->parrafo02CAT }}</td>
											<td>{{ $norma->parrafo02EN }}</td>
											<td>{{ $norma->parrafo02FR }}</td>

                                            <td>
                                                <form action="{{ route('normas.destroy',$norma->id) }}" method="POST">
                                                    <!-- <a class="btn btn-sm btn-primary " href="{{ route('normas.show',$norma->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a> -->
                                                    <a class="btn btn-sm btn-success" href="{{ route('normas.edit',$norma->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    <!-- @csrf -->
                                                    <!-- @method('DELETE') -->
                                                    <!-- <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button> -->
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $normas->links() !!}
            </div>
        </div>
    </div>
@endsection
