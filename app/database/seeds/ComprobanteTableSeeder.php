<?php

class ComprobanteTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('comprobante')->delete();

		// 1
		Comprobante::create(array(
				'id_itinerario' => 1
			));
	}
}