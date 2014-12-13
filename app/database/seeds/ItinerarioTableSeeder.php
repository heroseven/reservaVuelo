<?php

class ItinerarioTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('itinerario')->delete();

		// ida y vuelta lima-trujillo
		Itinerario::create(array(
				'id_ida' => 1,
				'id_vuelta' => 4,
				'id_usuario' => 1
			));
	}
}