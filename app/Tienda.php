<?php

namespace Store\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tienda extends Model {

	protected $table = 'tiendas';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $visible = array('nombre');

	public function productos()
	{
		return $this->hasMany('Store\Models\Producto', 'tienda_id');
	}

	public function bodega()
	{
		return $this->hasMany('Store\Bodega\Bodega', 'tienda_id');
	}

}