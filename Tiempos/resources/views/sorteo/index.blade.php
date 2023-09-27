@section('menu')
@extends('layouts.menu')
@extends('sidebar.sidebar')
@extends('layouts.app')
@section('template_title')
    Comisione
@endsection

@section('content')
<div id="main">

<header class="mb-3 ">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Sorteo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('sorteos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Configuracion</th>
										<th>Fecha Inicio</th>
										<th>Fecha Final</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sorteos as $sorteo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $sorteo->id_configuracion }}</td>
											<td>{{ $sorteo->fecha_inicio }}</td>
											<td>{{ $sorteo->fecha_final }}</td>

                                            <td>
                                                <form action="{{ route('sorteos.destroy',$sorteo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('sorteos.show',$sorteo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('sorteos.edit',$sorteo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $sorteos->links() !!}
            </div>
        </div>
    </div>
@endsection
