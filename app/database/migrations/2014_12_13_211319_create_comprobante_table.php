<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComprobanteTable extends Migration {

	public function up()
	{
		Schema::create('comprobante', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_itinerario')->unsigned();
			$table->string('precio');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('comprobante');
	}
}