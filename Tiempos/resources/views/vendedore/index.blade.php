

@extends('layouts.menu')
@extends('sidebar.sidebar')

@extends('layouts.app')

@section('content')
<div id="main">
    <header class="mb-2">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-mlg-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Vendedor') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('vendedore.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear ') }}
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
                                        <th>contraseña</th>
										<th>Saldo</th>
										<th>Id Vendedor</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vendedores as $vendedore)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $vendedore->name }}</td>
											<td>{{ $vendedore->email }}</td>
											<td>{{ $vendedore->telefono }}</td>
                                            <td>{{ $vendedore->contraseña }}</td>
											<td>{{ $vendedore->saldo }}</td>
											<td>{{ $vendedore->id_vendedor }}</td>

                                            <td>
                                                <form action="{{ route('vendedore.destroy',$vendedore->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('vendedore.show',$vendedore->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('vendedore.edit',$vendedore->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $vendedores->links() !!}
            </div>
        </div>
    </div>
   </div>
@endsection
