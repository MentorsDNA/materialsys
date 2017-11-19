@section('formulario')

<div class="">

    @include ('office.layouts.links.lnk-transaccion')
        @yield('vinculo')

    <div class="col-sm-9 col-md-9 col-lg-9">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Nuevo Deposito</h4>
                <p class="category">ingresa....</p>
            </div>
            <div class="card-content">

                <form method="POST" action="{{route('depositos.store')}}">
                    {!! csrf_field() !!}

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <select id="llamar_empresa" name="llamar_empresa" class="form-control">
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
                                <select id="llamar_titular" name="llamar_titular" class="form-control">
                                    <option value="">Titular</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <select id="deposito_cuenta_id" name="deposito_cuenta_id" class="form-control">
                                    <option value="">Cuenta</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Monto</label>
                                <input id="monto" name="monto" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <input id="fecha_deposito" name="fecha_deposito" type="date" class="form-control">
                            </div>
                        </div>
                    </div>
                    <hr width="100%">
                    <button type="submit" class="btn btn-primary pull-right">Guardar</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection