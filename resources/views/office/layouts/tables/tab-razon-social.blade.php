@section('tabla')



<div class=" col-sm-12 col-md-12 col-lg-12 ">
    <div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title">Razon Social</h4>
            <p class="category">Informacion Basica...</p>
        </div>
        <div class="card-content table-responsive">
            <table class="table table-hover">
                <thead class="text-warning">
                    <th>ID</th>
                    <th>RUC</th>
                    <th>Empresa</th>
                    <th>Razon Social</th>
                    <th>Acciones</th>
                </thead>
                <tbody>

                    @foreach ($razonsocial as $razons)
                    <tr class="odd gradeA">
                        <td>{{ $razons->id }}</td>
                        <td>{{ $razons->numero_ruc }}</td>
                        <td>{{ $razons->razon_empresa_id }}</td>
                        <td>{{ $razons->razon_social }}</td>

                        <td>
                            <!-- Botones de edicion -->
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#mRazonSocialMostrar" value="{{ $razons->id }}">
                            <i class="material-icons">crop_5_4</i> 
                            </button>

                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#mRazonSocialEditar" value="{{ $razons->id }}">
                            <i class="material-icons">border_color</i> 
                            </button>

                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#mRazonSocialBorrar" value="{{ $razons->id }}">
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