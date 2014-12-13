<?php

class Vuelo extends Eloquent {

	protected $table = 'vuelo';
	public $timestamps = true;
	protected $fillable = array('id_origen', 'id_destino', 'fecha_partida', 'fecha_salida', 'capacidad', 'costo');

	public function Origen()
	{
		return $this->hasOne('Ciudad', 'id');
	}

}