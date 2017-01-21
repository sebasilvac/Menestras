<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriasTable extends Migration {

	public function up()
	{
		Schema::create('categorias', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nombre', 200);
		});
	}

	public function down()
	{
		Schema::drop('categorias');
	}
}