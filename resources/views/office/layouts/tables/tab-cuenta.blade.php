@section('tabla')



<div class=" col-sm-11 col-md-12 col-lg-12 ">
    <div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title">Bancos</h4>
            <p class="category">Informacion Basica...</p>
        </div>
        <div class="card-content table-responsive">
            <table class="table table-hover">
                <thead class="text-warning">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acronimo</th>
                    <th>Direccion</th>
                    <th>Acciones</th>
                </thead>
                <tbody>

                    @foreach ($bancos as $banco)
                    <tr class="odd gradeA">
                        <td>{{ $banco->id }}</td>
                        <td>{{ $banco->nombre }}</td>
                        <td>{{ $banco->acronimo }}</td>
                        <td>{{ $banco->direccion }}</td>

                        <td>
                            <!-- Botones de edicion -->
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#mBancoMostrar" value="{{ $banco->id }}">
                            <i class="material-icons">crop_5_4</i> 
                            </button>

                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#mBancoEditar" value="{{ $banco->id }}">
                            <i class="material-icons">border_color</i> 
                            </button>

                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#mBancoBorrar" value="{{ $banco->id }}">
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