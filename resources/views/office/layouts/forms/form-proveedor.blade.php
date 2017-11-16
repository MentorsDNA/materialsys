@section('formulario')

<div class="">

    @include ('office.layouts.links.lnk-proveedor')
        @yield('vinculo')

    <div class="col-sm-9 col-md-9 col-lg-9">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Nuevo Proveedor</h4>
                <p class="category">ingresa....</p>
            </div>
            <div class="card-content">

                <form method="POST" action="{{route('proveedores.store')}}">
                    {!! csrf_field() !!}

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Nombres</label>
                                <input name="nombres" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Apellido Paterno</label>
                                <input name="apellido_paterno" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Apellido Materno</label>
                                <input name="apellido_materno" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group label-floating">
                                <label class="control-label">Numero de Identificacion</label>
                                <input name="numero_identificacion" type="text" class="form-control">
                            </div>
                        </div> 
                        <div class="col-md-5">
                            <div class="form-group label-floating">
                                <select name="tipo_identificacion" class="form-control">
                                    <option value=""> Tipo </option>
                                    <option value="1"> DNI </option>
                                    <option value="2"> Cedula </option>
                                    <option value="3"> C. E. </option>
                                    <option value="4"> Pasaporte </option>
                                    <option value="0"> Otro </option>
                                </select>

                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <select name="proveedor_empresa_id" class="form-control">
                                    <option value="">Empresa</option>

                                @foreach($empresas as $empresa)
                                    <option value="{{ $empresa->id }}">
                                        {{ $empresa->nombre }} 
                                    </option>
                                @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Cargo o Parentezco</label>
                                <input name="cargo_parentezco" type="text" class="form-control">
                            </div>
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