@section('menu')
@extends('layouts.menu')
@extends('sidebar.sidebar')
@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Comisiones
@endsection

@section('content')
<div id="main">
    <header class="mb-3 ">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-12">
            <div class="card">

                @includeif('partials.errors')

                <div class="container">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Comisiones</span>
                    </div>
                    
                        <form method="POST" action="{{ route('comisiones.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('comisione.form')

                        </form>
                    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    </section>
@endsection
