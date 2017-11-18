@extends('office.layouts.content')

@section('content')

<div>
    <div class="container-fluid">

        @include ('office.layouts.forms.form-cuenta')
            @yield('formulario')  


        @include ('office.layouts.tables.tab-cuenta')
            @yield('tabla')  

    </div>
</div>

@endsection