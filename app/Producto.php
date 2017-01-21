<?php

namespace Store\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model {

	protected $table = 'productos';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $visible = array('nombre', 'precio');

	public function tienda()
	{
		return $this->belongsTo('Store\Models\Tienda', 'tienda_id');
	}

	public function categoria()
	{
		return $this->belongsTo('Store\Models\Categoria', 'categoria_id');
	}

	public function bodega()
	{
		return $this->belongsTo('Store\Bodega\Bodega', 'bodega_id');
	}

}