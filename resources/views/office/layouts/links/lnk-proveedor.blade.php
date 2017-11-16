@section('vinculo')

<!-- links de pagina -->
<div class="col-sm-3 col-md-3 col-lg-3">
   <div class="card">
      <div class="card-content">
          <ul class="nav nav-pills nav-pills-icons nav-stacked" role="tablist">

            <?php
                function activeMenu($url){
                    return request()->is($url) ? 'active' : '';
                }
            ?>

            <li class="{{ activeMenu('proveedores')}}">
                <a href="{{ route ('proveedores.index')}}">            
                    <i class="material-icons">people</i>
                    Proveedor
                </a>
            </li>
            <li class="{{ activeMenu('empresas')}}">
                <a href="{{ route ('empresas.index')}}">
                    <i class="material-icons">domain</i>
                    Empresa
                </a>
            </li>
            <li class="{{ activeMenu('razonsocial')}}">
                <a href="{{ route ('razonsocial.index')}}">
                    <i class="material-icons">dehaze</i>
                    Razon Social
                </a>
            </li>
            <li class="{{ activeMenu('marcas')}}">
                <a href="{{ route ('marcas.index')}}">
                    <i class="material-icons">local_offer</i>
                    Marca
                </a>
            </li>
         </ul>
      </div>
   </div>
</div>

@endsection