@section('vinculo')

    <!-- links de pagina -->
    <div class="col-sm-2 col-md-4 col-lg-6">
        <ul class="nav nav-pills nav-pills-icons nav-stacked" role="tablist">

            <?php
                function activeMenu($url){
                    return request()->is($url) ? 'active' : '';
                }
            ?>


            <li class="{{ activeMenu('depositos')}}">
                <a href="{{ route ('depositos.index')}}">
                    <i class="material-icons">schedule</i>
                    Depositos
                </a>
            </li>
            <li class="{{ activeMenu('bancos')}}">
                <a href="{{ route ('bancos.index')}}">
                    <i class="material-icons">dashboard</i>
                    Bancos
                </a>
            </li>
            <li class="{{ activeMenu('cuentas')}}">
                <a href="{{ route ('cuentas.index')}}">
                    <i class="material-icons">schedule</i>
                    Cuentas
                </a>
            </li>
            <li class="{{ activeMenu('titulares')}}">
                <a href="{{ route ('titulares.index')}}">
                    <i class="material-icons">dashboard</i>
                    Titulares
                </a>
            </li>
        </ul>
    </div>

@endsection