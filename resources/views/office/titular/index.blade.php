@extends('office.layouts.content')

@section('content')

<div>
   <div class="container-fluid">

		<div class=" col-sm-12 col-md-12 col-lg-12 ">
		   <div class="card">
		      <div class="card-content">
					<ul class="nav nav-pills nav-pills-icons nav-pills-primary">

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

     @include ('office.layouts.tables.tab-titular')
         @yield('tabla')  

   </div>
</div>

@endsection