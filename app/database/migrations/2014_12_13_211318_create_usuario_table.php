<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuarioTable extends Migration {

	public function up()
	{
		Schema::create('usuario', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nombre');
			$table->string('apellido');
			$table->integer('dni');
			$table->string('tipoPago');
			$table->string('numTargeta');
			$table->string('expiryDate');
			$table->string('secureCode');
		});
	}

	public function down()
	{
		Schema::drop('usuario');
	}
}