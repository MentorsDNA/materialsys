@section('tabla')



<div class=" col-sm-12 col-md-12 col-lg-12 ">
    <div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title">Cuentas</h4>
            <p class="category">Informacion Basica...</p>
        </div>
        <div class="card-content table-responsive">
            <table class="table table-hover">
                <thead class="text-warning">
                    <th>ID</th>
                    <th>Banco</th>
                    <th>Proveedor</th>
                    <th>Nro de Cuenta</th>
                    <th>Moneda</th>
                    <th>Acciones</th>
                </thead>
                <tbody>

                    @foreach ($cuentas as $cuenta)
                    <tr class="odd gradeA">
                        <td>{{ $cuenta->id }}</td>
                        <td>{{ $cuenta->vBanco->nombre }}</td>
                        <td>{{ $cuenta->vProveedor->nombres." ".$cuenta->vProveedor->apellido_paterno." ".$cuenta->vProveedor->apellido_materno }}</td>
                        <td>{{ $cuenta->numero_cuenta }}</td>

                        <?php
                        if ($cuenta->moneda==1)
                            {$monedaletras="Soles";}
                        elseif ($cuenta->moneda==2)
                         {$monedaletras="Dolares";}
                        elseif ($cuenta->moneda==3)
                         {$monedaletras="Bolivianos";}
                        else
                             {$monedaletras="Otro";}
                        ?>   
                        <td>{{ $monedaletras }}</td>

                        <td>
                            <!-- Botones de edicion -->
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#mCuentaMostrar" value="{{ $cuenta->id }}">
                            <i class="material-icons">crop_5_4</i> 
                            </button>

                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#mCuentaEditar" value="{{ $cuenta->id }}">
                            <i class="material-icons">border_color</i> 
                            </button>

                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#mCuentaBorrar" value="{{ $cuenta->id }}">
                            <i class="material-icons">close</i> 
                            </button>               

                        </td>


                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection