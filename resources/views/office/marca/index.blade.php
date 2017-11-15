@extends('office.layouts.content')

@section('content')

<div class="content">
    <div class="container-fluid">

        @include ('office.layouts.forms.form-marca')
            @yield('formulario')  


        @include ('office.layouts.tables.tab-marca')
            @yield('tabla')  

    </div>
</div>

@endsection