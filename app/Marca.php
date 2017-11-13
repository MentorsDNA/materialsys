<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{

	protected $fillable = ['marca_empresa_id', 'marca'];

	// Funcion para reemplazar el id por el nombre de la Empresa

	public function verEmpresa()
		{
			return $this->belongsTo('App\Empresa', 'marca_empresa_id', 'id');
		}

}
