@extends('office.layouts.content')

@section('content')

<div>
    <div class="container-fluid">

        @include ('office.layouts.forms.form-producto')
            @yield('formulario')  


        @include ('office.layouts.tables.tab-producto')
            @yield('tabla')  

    </div>
</div>

@endsection