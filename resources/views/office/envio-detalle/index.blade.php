@extends('office.layouts.content')

@section('content')

<div class="content">
    <div class="container-fluid">

        @include ('office.layouts.forms.form-envio-detalle')
            @yield('formulario')  


        @include ('office.layouts.tables.tab-envio-detalle')
            @yield('tabla')  

    </div>
</div>

@endsection