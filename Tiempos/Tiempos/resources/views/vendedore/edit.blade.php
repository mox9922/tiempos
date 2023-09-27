@section('menu')
@extends('layouts.menu')
@extends('sidebar.sidebar')
@extends('layouts.app')
@endsection
@section('content')

@section('template_title')
    {{ __('Actualizar') }} Vendedor
@endsection

@section('content')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Actualizar') }} Vendedor</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('vendedore.update', $vendedore->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('vendedore.updateform')

                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
