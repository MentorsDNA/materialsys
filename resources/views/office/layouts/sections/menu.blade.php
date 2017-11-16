
<div class="sidebar" data-color="blue" data-image="assets/sidebar-1.jpg">
<!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="logo">
        <a href="#" class="simple-text">
            Creative Tim
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">


            <li class="{{ activeMenu('home') }}">
                <a href="{{ route ('home')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>

            <li class="{{ activeMenu('bancos')}} {{ activeMenu('cuentas')}} {{ activeMenu('titulares')}} {{ activeMenu('depositos')}}">
                <a href="{{ route ('depositos.index')}}">
                    <i class="material-icons">insert_chart</i>
                    <p> Transacciones </p>
                </a>
            </li>
            <li class="{{ activeMenu('proveedores')}} {{ activeMenu('empresas')}} {{ activeMenu('razonsocial')}} {{ activeMenu('marcas')}}">
                <a href="{{ route ('proveedores.index')}}">
                    <i class="material-icons">business</i>
                    <p> Proveedores </p>
                </a>
            </li>
            <li class="{{ activeMenu('detalle')}} {{activeMenu('caracteristica')}}">
                <a href="{{ route ('detalle.index')}}">
                    <i class="material-icons">view_module</i>
                    <p> Productos </p>
                </a>
            </li>
            <li class="{{ activeMenu('enviodetalle') }} {{ activeMenu('envioinformacion') }}">
                <a href="{{ route ('envioinformacion.index')}}">
                    <i class="material-icons">send</i>
                    <p> Envios </p>
                </a>
            </li>
            <li class="{{ activeMenu('compras') }}">
                <a href="{{ route ('compras.index')}}">
                    <i class="material-icons">add_shopping_cart</i>
                    <p> Compras </p>
                </a>
            </li>
            <li class="{{ activeMenu('ventas') }}">
                <a href="{{ route ('ventas.index')}}">
                    <i class="material-icons text-gray">shopping_cart</i>
                    <p> Ventas </p>
                </a>
            </li>
            <li class="{{ activeMenu('preciocompra')}} {{ activeMenu('precioventa')}}">
                <a href="{{ route ('preciocompra.index')}}">
                    <i class="material-icons text-gray">monetization_on</i>
                    <p> Precio </p>
                </a>
            </li>

            <li class="{{ activeMenu('novedades') }} active-pro">
                <a href="{{ route ('novedades.index')}}">
                    <i class="material-icons">local_play</i>
                    <p> Novedades </p>
                </a>
            </li>
        </ul>
    </div>
</div>