@section('formulario')

<div class="">

    @include ('office.layouts.links.lnk-transaccion')
        @yield('vinculo')

    <div class="col-sm-9 col-md-9 col-lg-9">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Nueva Cuenta</h4>
                <p class="category">ingresa....</p>
            </div>
            <div class="card-content">

                <form method="POST" action="{{route('cuentas.store')}}">
                    {!! csrf_field() !!}

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <select name="banco_id" class="form-control">
                                    <option value=""> Banco </option>

                                @foreach($bancos as $banco)
                                    <option value="{{ $banco->id }}">
                                        {{ $banco->nombre }} 
                                    </option>
                                @endforeach

                                </select>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <select name="proveedor_id" class="form-control">
                                    <option value=""> Titular </option>

                                @foreach($proveedores as $proveedor)
                                    <option value="{{ $proveedor->id }}">
                                        {{ $proveedor->nombres." ".$proveedor->apellido_paterno." ".$proveedor->apellido_materno }} 
                                    </option>
                                @endforeach

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label"> Nro de Cuenta </label>
                                <input name="numero_cuenta" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">

                                <select name="moneda" class="form-control">
                                    <option value=""> Moneda </option>
                                    <option value="1"> Soles </option>
                                    <option value="2"> Dolares </option>
                                    <option value="3"> Euros </option>
                                    <option value="4"> Bolivianos </option>
                                    <option value="9"> Otro </option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right"> Guardar </button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection