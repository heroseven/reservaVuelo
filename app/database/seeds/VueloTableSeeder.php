<?php

class VueloTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('vuelo')->delete();

		// 1
		Vuelo::create(array(
				'id_origen' => 1,
				'id_destino' => 2,
				'fecha_partida' => '2014-12-13 15:00:00',
				'fecha_salida' => '2014-12-14 15:00:00',
				'capacidad' => 50,
				'costo' => 150
			));

		// 2
		Vuelo::create(array(
				'fecha_partida' => '2014-12-14 15:00:00',
				'fecha_salida' => '2014-12-15 15:00:00',
				'capacidad' => 50,
				'costo' => 120,
				'id_origen' => 1,
				'id_destino' => 2
			));

		// 3
		Vuelo::create(array(
				'id_origen' => 1,
				'id_destino' => 2,
				'fecha_partida' => '2014-12-15 15:00:00',
				'fecha_salida' => '2014-12-16 15:00:00',
				'capacidad' => 50,
				'costo' => 100
			));

		// inverso 1
		Vuelo::create(array(
				'id_origen' => 2,
				'id_destino' => 1,
				'fecha_partida' => '2014-12-13 15:00:00',
				'fecha_salida' => '2014-12-14 15:00:00',
				'capacidad' => 50,
				'costo' => 100
			));

		// inverso 2
		Vuelo::create(array(
				'id_origen' => 2,
				'id_destino' => 1,
				'fecha_partida' => '2014-12-14 15:00:00',
				'fecha_salida' => '2014-12-15 15:00:00',
				'capacidad' => 50,
				'costo' => 100
			));

		// inverso 3
		Vuelo::create(array(
				'id_origen' => 2,
				'id_destino' => 1,
				'fecha_partida' => '2014-12-15 15:00:00',
				'fecha_salida' => '2014-12-16 15:00:00',
				'capacidad' => 50,
				'costo' => 200
			));
	}
}