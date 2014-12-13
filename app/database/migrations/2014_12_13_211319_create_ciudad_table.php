<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCiudadTable extends Migration {

	public function up()
	{
		Schema::create('ciudad', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nombre');
		});
	}

	public function down()
	{
		Schema::drop('ciudad');
	}
}