<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model

{

	protected $fillable = ['banco_id', 'proveedor_id', 'numero_cuenta', 'moneda'];


	// Funcion para reemplazar el id por el nombre de la Empresa
	public function vBanco()
		{
			return $this->belongsTo('App\Banco', 'banco_id', 'id');
		}

	// Funcion para reemplazar el id por el nombre de la Empresa
	public function vProveedor()
		{
			return $this->belongsTo('App\Proveedore', 'proveedor_id', 'id');
		}

	public static function cuentas($id)
		{
			return Cuenta::where('proveedor_id','=',$id)
			->get();
		}

}
