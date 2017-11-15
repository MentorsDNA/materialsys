@extends('office.layouts.content')

@section('content')

<div class="content">
    <div class="container-fluid">

        @include ('office.layouts.forms.form-novedad')
            @yield('formulario')  


        @include ('office.layouts.tables.tab-novedad')
            @yield('tabla')  

    </div>
</div>

@endsection