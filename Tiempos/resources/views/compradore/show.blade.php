@extends('layouts.app')

@section('template_title')
    {{ $compradore->name ?? "{{ __('Show') Compradore" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Compradore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('compradores.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $compradore->name }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $compradore->email }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $compradore->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Id Comprador:</strong>
                            {{ $compradore->id_comprador }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
