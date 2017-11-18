@extends('office.layouts.content')

@section('content')

<div>
    <div class="container-fluid">

        @include ('office.layouts.forms.form-proveedor')
            @yield('formulario')  


        @include ('office.layouts.tables.tab-proveedor')
            @yield('tabla')  

    </div>
</div>

@endsection