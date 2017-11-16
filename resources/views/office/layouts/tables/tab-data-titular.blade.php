@section('tabla')



<div class=" col-sm-12 col-md-12 col-lg-12 ">
    <div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title">Titulares</h4>
            <p class="category">Informacion Basica...</p>
        </div>
        <div class="card-content table-responsive">
            <table class="table table-hover">
                <thead class="text-warning">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Empresa</th>
                    <th>Acciones</th>
                </thead>
                <tbody>

                    @foreach ($proveedores as $titular)
                    <tr class="odd gradeA">
                        <td>{{ $titular->id }}</td>
                        <td>{{ $titular->nombres }}</td>
                        <td>{{ $titular->apellido_paterno." ".$titular->apellido_materno }}</td>
                        <td>{{ $titular->verEmpresa->nombre }}</td>

                        <td>
                            <!-- Botones de edicion -->
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#mTitularMostrar" value="{{ $titular->id }}">
                            <i class="material-icons">crop_5_4</i> 
                            </button>

                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#mTitularEditar" value="{{ $titular->id }}">
                            <i class="material-icons">border_color</i> 
                            </button>

                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#mTitularBorrar" value="{{ $titular->id }}">
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