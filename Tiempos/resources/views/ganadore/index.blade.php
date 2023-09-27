@extends('layouts.app')

@section('template_title')
    Ganadore
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ganadore') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ganadores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Sorteo</th>
										<th>Premio Primer Numero</th>
										<th>Premio Segundo Numero</th>
										<th>Premio Tercer Numero</th>
										<th>Fecha</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ganadores as $ganadore)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $ganadore->id_sorteo }}</td>
											<td>{{ $ganadore->premio_primer_numero }}</td>
											<td>{{ $ganadore->premio_segundo_numero }}</td>
											<td>{{ $ganadore->premio_tercer_numero }}</td>
											<td>{{ $ganadore->fecha }}</td>

                                            <td>
                                                <form action="{{ route('ganadores.destroy',$ganadore->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ganadores.show',$ganadore->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ganadores.edit',$ganadore->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $ganadores->links() !!}
            </div>
        </div>
    </div>
@endsection
