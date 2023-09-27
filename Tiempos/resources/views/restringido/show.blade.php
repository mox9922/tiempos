@section('menu')
@extends('layouts.menu')
@extends('sidebar.sidebar')
@extends('layouts.app')
@section('template_title')

{{ $restringido->name ?? "{{ __('Show') Restringido" }} }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Restringido</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('restringidos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Numero:</strong>
                            {{ $restringido->numero }}
                        </div>
                        <div class="form-group">
                            <strong>Id Sorteo:</strong>
                            {{ $restringido->id_sorteo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
