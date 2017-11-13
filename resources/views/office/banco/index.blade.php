@extends('office.layouts.content')

@section('content')

<div class="content">
    <div class="container-fluid">


                @include ('office.layouts.indicator.indicador')
                    @yield('indicador')  

                @include ('office.layouts.stadistics.estadistica')
                    @yield('estadistica')  

                @include ('office.layouts.forms.formulario')
                    @yield('formulario')  

                @include ('office.layouts.tables.tabla')
                    @yield('tabla')  

    </div>
</div>

@endsection