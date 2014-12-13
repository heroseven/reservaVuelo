<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('vuelo', function(Blueprint $table) {
			$table->foreign('id_origen')->references('id')->on('ciudad')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('vuelo', function(Blueprint $table) {
			$table->foreign('id_destino')->references('id')->on('ciudad')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('itinerario', function(Blueprint $table) {
			$table->foreign('id_ida')->references('id')->on('vuelo')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('itinerario', function(Blueprint $table) {
			$table->foreign('id_vuelta')->references('id')->on('vuelo')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('itinerario', function(Blueprint $table) {
			$table->foreign('id_usuario')->references('id')->on('usuario')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('comprobante', function(Blueprint $table) {
			$table->foreign('id_itinerario')->references('id')->on('itinerario')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('vuelo', function(Blueprint $table) {
			$table->dropForeign('vuelo_id_origen_foreign');
		});
		Schema::table('vuelo', function(Blueprint $table) {
			$table->dropForeign('vuelo_id_destino_foreign');
		});
		Schema::table('itinerario', function(Blueprint $table) {
			$table->dropForeign('itinerario_id_ida_foreign');
		});
		Schema::table('itinerario', function(Blueprint $table) {
			$table->dropForeign('itinerario_id_vuelta_foreign');
		});
		Schema::table('itinerario', function(Blueprint $table) {
			$table->dropForeign('itinerario_id_usuario_foreign');
		});
		Schema::table('comprobante', function(Blueprint $table) {
			$table->dropForeign('comprobante_id_itinerario_foreign');
		});
	}
}