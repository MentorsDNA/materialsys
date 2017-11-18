@extends('office.layouts.content')

@section('content')

<div>
    <div class="container-fluid">

        @include ('office.layouts.forms.form-envio-informacion')
            @yield('formulario')  


        @include ('office.layouts.tables.tab-envio-informacion')
            @yield('tabla')  

    </div>
</div>

@endsection