@extends('office.layouts.content')

@section('content')

<div>
    <div class="container-fluid">

        @include ('office.layouts.forms.form-compra')
            @yield('formulario')  


        @include ('office.layouts.tables.tab-compra')
            @yield('tabla')  

    </div>
</div>

@endsection