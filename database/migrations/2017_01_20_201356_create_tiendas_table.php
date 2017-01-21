<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTiendasTable extends Migration {

	public function up()
	{
		Schema::create('tiendas', function(Blueprint $table) {
			$table->increments('id');

			$table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

			$table->string('nombre', 200);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('tiendas');
	}
}
