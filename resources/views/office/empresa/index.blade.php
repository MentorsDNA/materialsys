@extends('office.layouts.content')

@section('content')

<div>
    <div class="container-fluid">

        @include ('office.layouts.forms.form-empresa')
            @yield('formulario')  


        @include ('office.layouts.tables.tab-empresa')
            @yield('tabla')  

    </div>
</div>

@endsection