<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItinerarioTable extends Migration {

	public function up()
	{
		Schema::create('itinerario', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_ida')->unsigned();
			$table->integer('id_vuelta')->unsigned();
			$table->integer('id_usuario')->unsigned();
			$table->integer('costo');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('itinerario');
	}
}