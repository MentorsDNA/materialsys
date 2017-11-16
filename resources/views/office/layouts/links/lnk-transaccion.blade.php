@section('vinculo')

<!-- links de pagina -->
<div class="col-sm-3 col-md-3 col-lg-3">
    <div class="card">
        <div class="card-content">
            <ul class="nav nav-pills nav-pills-icons nav-stacked">

                <?php
                    function activeMenu($url){
                        return request()->is($url) ? 'active' : '';
                    }
                ?>


                <li class="{{ activeMenu('depositos')}}">
                    <a href="{{ route ('depositos.index')}}">
                        <i class="material-icons">local_atm</i>
                        Depositos
                    </a>
                </li>
                <li class="{{ activeMenu('bancos')}}">
                    <a href="{{ route ('bancos.index')}}">
                        <i class="material-icons">business</i>
                        Bancos
                    </a>
                </li>
                <li class="{{ activeMenu('cuentas')}}">
                    <a href="{{ route ('cuentas.index')}}">
                        <i class="material-icons">storage</i>
                        Cuentas
                    </a>
                </li>
                <li class="{{ activeMenu('titulares')}}">
                    <a href="{{ route ('titulares.index')}}">
                        <i class="material-icons">supervisor_account</i>
                        Titulares
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection