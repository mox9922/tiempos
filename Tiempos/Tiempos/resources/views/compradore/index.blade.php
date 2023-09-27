@extends('layouts.app')

@section('template_title')
    Compradore
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Compradore') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('compradores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Name</th>
										<th>Email</th>
										<th>Telefono</th>
										<th>Id Comprador</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($compradores as $compradore)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $compradore->name }}</td>
											<td>{{ $compradore->email }}</td>
											<td>{{ $compradore->telefono }}</td>
											<td>{{ $compradore->id_comprador }}</td>

                                            <td>
                                                <form action="{{ route('compradores.destroy',$compradore->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('compradores.show',$compradore->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('compradores.edit',$compradore->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $compradores->links() !!}
            </div>
        </div>
    </div>
@endsection
