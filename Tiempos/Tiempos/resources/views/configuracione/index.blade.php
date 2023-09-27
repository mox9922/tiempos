@section('menu')
@extends('layouts.menu')
@extends('sidebar.sidebar')
@extends('layouts.app')

@section('template_title')
    Configuracione
@endsection

@section('content')
<div id="main">

<header class="mb-3 ">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Configuraciones') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('configuraciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nueva Configuracion') }}
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
                                        
										<th>Descripcion</th>
										<th>Fecha Inicio</th>
										<th>Fecha Final</th>
										<th>Hora Inicio</th>
										<th>Hora Final</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($configuraciones as $configuracione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $configuracione->descripcion }}</td>
											<td>{{ $configuracione->fecha_inicio }}</td>
											<td>{{ $configuracione->fecha_final }}</td>
											<td>{{ $configuracione->hora_inicio }}</td>
											<td>{{ $configuracione->hora_final }}</td>
											<td>{{ $configuracione->status }}</td>

                                            <td>
                                                <form action="{{ route('configuraciones.destroy',$configuracione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('configuraciones.show',$configuracione->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('configuraciones.edit',$configuracione->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $configuraciones->links() !!}
            </div>
   
@endsection
