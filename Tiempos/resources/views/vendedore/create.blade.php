@section('menu')
@extends('layouts.menu')
@extends('sidebar.sidebar')
@extends('layouts.app')
@endsection
@section('content')
@section('template_title')
    {{ __('Crear') }} Vendedor
@endsection

@section('content')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Crear') }} Vendedor</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('vendedore.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('vendedore.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
