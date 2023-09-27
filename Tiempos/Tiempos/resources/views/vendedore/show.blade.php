@section('menu')
@extends('layouts.menu')
@extends('sidebar.sidebar')
@extends('layouts.app')
@endsection
@section('content')

@section('template_title')
    {{ $vendedore->name ?? "{{ __('Mostrar') Vendedor" }}
@endsection

@section('content')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Vendedor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('vendedore.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $vendedore->name }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $vendedore->email }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $vendedore->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Saldo:</strong>
                            {{ $vendedore->saldo }}
                        </div>
                        <div class="form-group">
                            <strong>Id Vendedor:</strong>
                            {{ $vendedore->id_vendedor }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
