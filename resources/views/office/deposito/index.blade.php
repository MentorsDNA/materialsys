@extends('office.layouts.content')

@section('content')

<div>
    <div class="container-fluid">

        @include ('office.layouts.forms.form-deposito')
            @yield('formulario')  


        @include ('office.layouts.tables.tab-deposito')
            @yield('tabla')  

    </div>
</div>

@endsection