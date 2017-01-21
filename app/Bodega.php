<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bodega extends Model {

	protected 	$fillable 	= ['nombre', 'direccion', 'tienda_id'];
	protected 	$table 		= 'bodegas';
	public 		$timestamps = true;
	protected 	$visible = array('nombre', 'direccion', 'tienda_id');

	public function productos()
	{
		return $this->hasMany(Producto::class);
	}

	public function tienda()
	{
		return $this->belongsTo('Store\Models\Tienda', 'tienda_id');
	}

}
