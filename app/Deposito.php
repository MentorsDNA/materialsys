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


}
