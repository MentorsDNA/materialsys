@extends('office.layouts.content')

@section('content')

<div>
    <div class="container-fluid">

        @include ('office.layouts.forms.form-detalle')
            @yield('formulario')  


        @include ('office.layouts.tables.tab-detalle')
            @yield('tabla')  

    </div>
</div>

@endsection