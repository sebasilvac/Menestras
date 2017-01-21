<?php

namespace Store\Bodega;

use Illuminate\Database\Eloquent\Model;

class Bodega extends Model {

	protected $table = 'bodegas';
	public $timestamps = true;
	protected $visible = array('direccion');

	public function productos()
	{
		return $this->hasMany('Store\Models\Producto', 'bodega_id');
	}

	public function tienda()
	{
		return $this->belongsTo('Store\Models\Tienda', 'tienda_id');
	}

}