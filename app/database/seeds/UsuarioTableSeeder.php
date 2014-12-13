<?php

class UsuarioTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('usuario')->delete();

		// 1
		Usuario::create(array(
				'nombre' => 'Leila',
				'apellido' => 'Lazo',
				'dni' => '47453059'
			));
	}
}