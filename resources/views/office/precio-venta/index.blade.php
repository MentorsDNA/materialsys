@extends('office.layouts.content')

@section('content')

<div>
    <div class="container-fluid">

        @include ('office.layouts.forms.form-precio-venta')
            @yield('formulario')  


        @include ('office.layouts.tables.tab-precio-venta')
            @yield('tabla')  

    </div>
</div>

@endsection