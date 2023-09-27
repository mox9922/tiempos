@section('menu')
@extends('layouts.menu')
@extends('sidebar.sidebar')
@extends('layouts.app')

<div id="main">
    <header class="mb-3 ">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Nueva') }} Configuración</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('configuraciones.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('configuracione.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
