@extends('layouts.app')

@section('template_title')
    {{ $venta->name ?? "{{ __('Show') Venta" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Venta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ventas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha Compra:</strong>
                            {{ $venta->fecha_compra }}
                        </div>
                        <div class="form-group">
                            <strong>Numero:</strong>
                            {{ $venta->numero }}
                        </div>
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $venta->monto }}
                        </div>
                        <div class="form-group">
                            <strong>Id User:</strong>
                            {{ $venta->id_user }}
                        </div>
                        <div class="form-group">
                            <strong>Id Sorteo:</strong>
                            {{ $venta->id_sorteo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
