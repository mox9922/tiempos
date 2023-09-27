@section('menu')
@extends('layouts.menu')
@extends('sidebar.sidebar')
@extends('layouts.app')

@section('template_title')
    {{ $comisione->name ?? "{{ __('Show') Comisione" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Comisione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('comisiones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id User:</strong>
                            {{ $comisione->id_user }}
                        </div>
                        <div class="form-group">
                            <strong>Porcentaje:</strong>
                            {{ $comisione->porcentaje }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
