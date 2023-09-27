@extends('layouts.app')

@section('template_title')
    {{ $comisionesSorteo->name ?? "{{ __('Show') Comisiones Sorteo" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Comisiones Sorteo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('comisiones-sorteos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id User:</strong>
                            {{ $comisionesSorteo->id_user }}
                        </div>
                        <div class="form-group">
                            <strong>Id Sorteo:</strong>
                            {{ $comisionesSorteo->id_sorteo }}
                        </div>
                        <div class="form-group">
                            <strong>Id Comision:</strong>
                            {{ $comisionesSorteo->id_comision }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $comisionesSorteo->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $comisionesSorteo->monto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
