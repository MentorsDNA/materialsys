<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('empres', function () {
	return \App\Empresa::all();
});

Route::get('preci', function () {
	return \App\ProductoPrecio::all();
});



Route::resource('bancos', 'BancoController');

Route::resource('cuentas', 'CuentaController');

Route::resource('titulares', 'TitulareController');

Route::resource('depositos', 'DepositoController');

Route::get('proveedores/{id}', 'DepositoController@verProv');

/*Route::get('depos', function () {
	return \App\Empresa::all();
});*/




Route::resource('detalle', 'DetalleController');

Route::resource('caracteristica', 'CaracteristicaController');




Route::resource('compras', 'CompraController');




Route::resource('informacionenvio', 'EnvioInformacionController');

Route::resource('detalleenvio', 'EnvioDetalleController');




Route::resource('proveedores', 'ProveedoreController');

Route::resource('empresas', 'EmpresaController');

Route::resource('razonsocial', 'RazonSocialController');

Route::resource('marcas', 'MarcaController');




Route::resource('preciocompra', 'PrecioCompraController');

Route::resource('precioventa', 'PrecioVentaController');
