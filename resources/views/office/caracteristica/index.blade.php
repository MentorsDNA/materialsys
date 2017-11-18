@extends('office.layouts.content')

@section('content')

<div>
    <div class="container-fluid">

    	<div class="title-block">
    		<h1 class="title"> Caracteristicas! </h1>
    		<p class="title-description"> Ingreso y visualizacion ... </p>
		</div>

        @include ('office.layouts.forms.form-caracteristica')
            @yield('formulario')  


        @include ('office.layouts.tables.tab-caracteristica')
            @yield('tabla')  

    </div>
</div>

@endsection