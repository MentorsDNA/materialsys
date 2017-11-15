@extends('office.layouts.content')

@section('content')

<div class="content">
    <div class="container-fluid">

        @include ('office.layouts.forms.form-banco')
            @yield('formulario')  


        @include ('office.layouts.tables.tab-banco')
            @yield('tabla')  

    </div>
</div>

@endsection