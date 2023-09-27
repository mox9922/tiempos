@section('menu')
@extends('layouts.menu')
@extends('sidebar.sidebar')
@extends('layouts.app')


@section('template_title')
    {{ $sorteo->name ?? "{{ __('Show') Sorteo" }} }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Sorteo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sorteos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Configuracion:</strong>
                            {{ $sorteo->id_configuracion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio:</strong>
                            {{ $sorteo->fecha_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Final:</strong>
                            {{ $sorteo->fecha_final }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
