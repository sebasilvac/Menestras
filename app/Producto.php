<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model {

	protected $table = 'productos';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	protected 	$visible 	= ['nombre', 'cod_barra', 'precio', 'tienda_id', 'categoria_id', 'bodega_id'];
	protected 	$fillable 	= ['nombre', 'cod_barra', 'precio', 'tienda_id', 'categoria_id', 'bodega_id'];

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
