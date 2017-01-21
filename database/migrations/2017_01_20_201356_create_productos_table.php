<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductosTable extends Migration {

	public function up()
	{
		Schema::create('productos', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('tienda_id')->unsigned();
			$table->string('nombre', 200);
			$table->string('cod_barra')->nullable();
			$table->integer('categoria_id');
			$table->integer('bodega_id')->unsigned();
			$table->integer('precio');
		});
	}

	public function down()
	{
		Schema::drop('productos');
	}
}