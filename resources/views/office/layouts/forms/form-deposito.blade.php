@section('formulario')

<div class="row">

    @include ('office.layouts.links.lnk-transaccion')
        @yield('vinculo')

    <div class="col-sm-8 col-md-8 col-lg-8">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Deposito</h4>
                <p class="category">ingresa....</p>
            </div>
            <div class="card-content">

                <form method="POST" action="{{route('depositos.store')}}">
                    {!! csrf_field() !!}

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Empresa</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Titular</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Cuenta</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Monto</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <input type="date" class="form-control">
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