<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tienda extends Model {

	protected $table = 'tiendas';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $visible = array('nombre', 'user_id');

	protected 	$fillable 	= ['nombre', 'user_id'];

	public function productos()
	{
		return $this->hasMany('Store\Models\Producto', 'tienda_id');
	}

	public function bodegas()
	{
		return $this->hasMany(Bodega::class);
	}

}
