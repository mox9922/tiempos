@extends('layouts.app')

@section('template_title')
    Comisiones Sorteo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Comisiones Sorteo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('comisiones-sorteos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id User</th>
										<th>Id Sorteo</th>
										<th>Id Comision</th>
										<th>Fecha</th>
										<th>Monto</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($comisionesSorteos as $comisionesSorteo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $comisionesSorteo->id_user }}</td>
											<td>{{ $comisionesSorteo->id_sorteo }}</td>
											<td>{{ $comisionesSorteo->id_comision }}</td>
											<td>{{ $comisionesSorteo->fecha }}</td>
											<td>{{ $comisionesSorteo->monto }}</td>

                                            <td>
                                                <form action="{{ route('comisiones-sorteos.destroy',$comisionesSorteo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('comisiones-sorteos.show',$comisionesSorteo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('comisiones-sorteos.edit',$comisionesSorteo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $comisionesSorteos->links() !!}
            </div>
        </div>
    </div>
@endsection
