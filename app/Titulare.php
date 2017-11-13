<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Titulare extends Model

{

	//visualizar
	public function verEmpresa()
		{
			return $this->belongsTo('App\Empresa', 'proveedor_empresa_id', 'id');
		}

/*

	public function empresas_id()
		{
			return $this->belongsTo(Pempresa::class);
		}


public function buscaEmpresa(array $codigo_empresa)
{
return $this->nombreEmpresa->pluck('nombre')->intersect($empresas)->count();
}


public function laEmpresa()
{
return $this->hasOne('App\Empresa', 'id', 'codigo_empresa', 'nombre' );
}

*/

}
