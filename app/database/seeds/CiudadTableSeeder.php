<?php

class CiudadTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('ciudad')->delete();

		// 1
		Ciudad::create(array(
				'nombre' => 'Lima'
			));

		// 2
		Ciudad::create(array(
				'nombre' => 'Trujillo'
			));

		// 3
		Ciudad::create(array(
				'nombre' => 'Cuzco'
			));
	}
}