<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBodegasTable extends Migration {

	public function up()
	{
		Schema::create('bodegas', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nombre', 200);
			$table->string('direccion', 250);
			$table->integer('tienda_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('bodegas');
	}
}