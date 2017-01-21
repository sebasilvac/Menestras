<?php

namespace Store\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model {

	protected $table = 'categorias';
	public $timestamps = true;

	public function productos()
	{
		return $this->hasMany('Store\Models\Producto', 'categoria_id');
	}

}