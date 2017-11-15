@extends('office.layouts.content')

@section('content')

<div class="content">
    <div class="container-fluid">

        @include ('office.layouts.forms.form-venta')
            @yield('formulario')  


        @include ('office.layouts.tables.tab-venta')
            @yield('tabla')  

    </div>
</div>

@endsection