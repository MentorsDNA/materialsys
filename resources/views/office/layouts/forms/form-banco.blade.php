@section('formulario')

<div class="row">

    @include ('office.layouts.links.lnk-transaccion')
        @yield('vinculo')

    <div class="col-sm-10 col-md-6 col-lg-5">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Nuevo Banco</h4>
                <p class="category">Completar todas las Celdas</p>
            </div>
            <div class="card-content">
                <form method="POST" action="{{route('bancos.store')}}">
                    {!! csrf_field() !!}
                    <div class="col-md-12">
                        <div class="form-group label-floating">
                            <label class="control-label">Nombre</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group label-floating">
                            <label class="control-label">Acromino</label>
                            <input type="email" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group label-floating">
                            <label class="control-label">Direccion</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <hr width="30%">
                    <button type="submit" class="btn btn-primary pull-right">Guardar</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection