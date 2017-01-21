<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('productos', function(Blueprint $table) {
			$table->foreign('tienda_id')->references('id')->on('tiendas')
						->onDelete('restrict')
						->onUpdate('cascade');
		});
		Schema::table('productos', function(Blueprint $table) {
			$table->foreign('bodega_id')->references('id')->on('bodegas')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('bodegas', function(Blueprint $table) {
			$table->foreign('tienda_id')->references('id')->on('tiendas')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('productos', function(Blueprint $table) {
			$table->dropForeign('productos_tienda_id_foreign');
		});
		Schema::table('productos', function(Blueprint $table) {
			$table->dropForeign('productos_bodega_id_foreign');
		});
		Schema::table('bodegas', function(Blueprint $table) {
			$table->dropForeign('bodegas_tienda_id_foreign');
		});
	}
}