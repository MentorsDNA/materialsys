@extends('office.layouts.content')

@section('content')

<div class="content">
    <div class="container-fluid">

        @include ('office.layouts.forms.form-razon-social')
            @yield('formulario')  


        @include ('office.layouts.tables.tab-razon-social')
            @yield('tabla')  

    </div>
</div>

@endsection