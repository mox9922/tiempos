@extends('layouts.app')

@section('template_title')
    {{ $configuracione->name ?? "{{ __('Show') Configuracione" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Configuracione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('configuraciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $configuracione->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio:</strong>
                            {{ $configuracione->fecha_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Final:</strong>
                            {{ $configuracione->fecha_final }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Inicio:</strong>
                            {{ $configuracione->hora_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Final:</strong>
                            {{ $configuracione->hora_final }}
                        </div>
                        <div class="form-group">
                            <strong>Premio Primer Numero:</strong>
                            {{ $configuracione->premio_primer_numero }}
                        </div>
                        <div class="form-group">
                            <strong>Premio Segundo Numero:</strong>
                            {{ $configuracione->premio_segundo_numero }}
                        </div>
                        <div class="form-group">
                            <strong>Premio Tercer Numero:</strong>
                            {{ $configuracione->premio_tercer_numero }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $configuracione->status }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
