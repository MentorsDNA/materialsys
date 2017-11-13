<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deposito extends Model
{

	protected $fillable = ['deposito_cuenta_id', 'monto', 'fecha_deposito'];



	//funcion para visualizar
	public function verCuenta()
		{
			return $this->belongsTo('App\Cuenta', 'deposito_cuenta_id', 'id');
		}

	//visualizar
	public function verProveedor()
		{
			return $this->belongsTo('App\Proveedore', 'titular_informacion_id', 'id');
		}

	//visualizar
	public function verTitular()
		{
			return $this->belongsTo('App\Titulare', 'titular_informacion_id', 'id');
		}


	public static function untitular($id)
	{

		return Town::where('state_id', '=', $id)
		->get();

	}

}
