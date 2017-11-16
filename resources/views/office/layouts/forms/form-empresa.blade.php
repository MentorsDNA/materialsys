@section('formulario')

<div class="">

    @include ('office.layouts.links.lnk-proveedor')
        @yield('vinculo')

    <div class="col-sm-9 col-md-9 col-lg-9">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Nueva Empresa</h4>
                <p class="category">Completa todos los campos... </p>
            </div>
            <div class="card-content">
                <form method="POST" action="{{route('empresas.store')}}">
                    {!! csrf_field() !!}
                    <div class="col-md-12">
                        <div class="form-group label-floating">
                            <label class="control-label"> Codigo </label>
                            <input name="codigo0" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group label-floating">
                            <label class="control-label"> Nombre </label>
                            <input name="nombre" type="email" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group label-floating">
                            <label class="control-label"> Categoria </label>
                            <input name="categoria" type="text" class="form-control">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary pull-right">Guardar</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection