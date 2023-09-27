@section('menu')
@extends('layouts.menu')
@extends('sidebar.sidebar')
@extends('layouts.app')
@section('template_title')
    {{ __('Update') }} Comisione
@endsection

@section('content')
<div id="main">

    <header class="mb-3 ">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    
    <div class="container">

                @includeif('partials.errors')
 </div>
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Comisione</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('comisiones.update', $comisione->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('comisione.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection
