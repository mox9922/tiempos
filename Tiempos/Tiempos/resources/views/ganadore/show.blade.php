@extends('layouts.app')

@section('template_title')
    {{ $ganadore->name ?? "{{ __('Show') Ganadore" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Ganadore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ganadores.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Sorteo:</strong>
                            {{ $ganadore->id_sorteo }}
                        </div>
                        <div class="form-group">
                            <strong>Premio Primer Numero:</strong>
                            {{ $ganadore->premio_primer_numero }}
                        </div>
                        <div class="form-group">
                            <strong>Premio Segundo Numero:</strong>
                            {{ $ganadore->premio_segundo_numero }}
                        </div>
                        <div class="form-group">
                            <strong>Premio Tercer Numero:</strong>
                            {{ $ganadore->premio_tercer_numero }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $ganadore->fecha }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
