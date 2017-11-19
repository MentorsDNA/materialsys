@section('tabla')



<div class=" col-sm-12 col-md-12 col-lg-12 ">
    <div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title">Depositos</h4>
            <p class="category">Informacion Basica...</p>
        </div>
        <div class="card-content table-responsive">
            <table class="table table-hover">
                <thead class="text-warning">
                    <th> ID</th>
                    <th> Cuenta </th>
                    <th> Monto </th>
                    <th> Fecha </th>
                    <th> Acciones </th>
                </thead>
                <tbody>

                    @foreach ($depositos as $deposito)
                    <tr class="odd gradeA">
                        <td>{{ $deposito->id }}</td>
                        <td>{{ $deposito->deposito_cuenta_id }}</td>
                        <td>{{ $deposito->monto }}</td>
                        <td>{{ $deposito->fecha_deposito }}</td>

                        <td>
                            <!-- Botones de edicion -->
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#mDepositoMostrar" value="{{ $deposito->id }}">
                            <i class="material-icons">crop_5_4</i> 
                            </button>

                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#mDepositoEditar" value="{{ $deposito->id }}">
                            <i class="material-icons">border_color</i> 
                            </button>

                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#mDepositoBorrar" value="{{ $deposito->id }}">
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