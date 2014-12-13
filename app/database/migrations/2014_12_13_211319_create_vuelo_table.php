<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVueloTable extends Migration {

	public function up()
	{
		Schema::create('vuelo', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_origen')->unsigned();
			$table->integer('id_destino')->unsigned();
			$table->datetime('fecha_partida');
			$table->datetime('fecha_salida');
			$table->string('capacidad');
			$table->integer('costo');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('vuelo');
	}
}