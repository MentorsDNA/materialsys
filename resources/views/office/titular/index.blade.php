@extends('office.layouts.content')

@section('content')

<div class="content">
    <div class="container-fluid">

        @include ('office.layouts.forms.form-titular')
            @yield('formulario')  


        @include ('office.layouts.tables.tab-titular')
            @yield('tabla')  

    </div>
</div>

@endsection