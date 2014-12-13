<?php

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Eloquent::unguard();

		$this->call('UsuarioTableSeeder');
		$this->command->info('Usuario table seeded!');

		$this->call('CiudadTableSeeder');
		$this->command->info('Ciudad table seeded!');

		$this->call('VueloTableSeeder');
		$this->command->info('Vuelo table seeded!');

		$this->call('ItinerarioTableSeeder');
		$this->command->info('Itinerario table seeded!');
		
		$this->call('ComprobanteTableSeeder');
		$this->command->info('Comprobante table seeded!');
	}
}