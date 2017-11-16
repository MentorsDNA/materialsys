@section('formulario')

<div class="row">

    @include ('office.layouts.links.lnk-transaccion')
        @yield('vinculo')

    <div class="col-sm-10 col-md-8 col-lg-6">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Nuevo Banco</h4>
                <p class="category">Completar todas las Celdas</p>
            </div>
            <div class="card-content">

                {!! Form::open(['route' => 'bancos.store', 'method' => 'POST']) !!}

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">

                            {!! Form::label('nombre', 'Nombre', ['class' => 'form-control']) !!}
                            {!! Form::text('nombre', null, ['class' => 'form-control']) !!}

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">

                            {!! Form::label('acronimo', 'Acronimo', ['class' => 'form-control']) !!}
                            {!! Form::text('acronimo', null, ['class' => 'form-control']) !!}

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">

                            {!! Form::label('direccion', 'Direccion', ['class' => 'form-control']) !!}
                            {!! Form::text('direccion', null, ['class' => 'form-control']) !!}

                            </div>
                        </div>
                    </div>

                            {!! Form::submit('Guardar', ['class' => 'btn btn-primary pull-right'], 'Guardar') !!}

                    <div class="clearfix">
                    </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>

@endsection