@extends('office.layouts.content')

@section('content')

<div>
    <div class="container-fluid">

        @include ('office.layouts.forms.form-precio-compra')
            @yield('formulario')  


        @include ('office.layouts.tables.tab-precio-compra')
            @yield('tabla')  

    </div>
</div>

@endsection