<?php

class Usuario extends Eloquent {

	protected $table = 'usuario';
	public $timestamps = false;
	protected $fillable = array('nombre', 'apellido', 'dni', 'tipoPago', 'numTargeta', 'expiryDate', 'secureCode');

	public function Itinerario()
	{
		return $this->hasOne('Itinerario', 'id');
	}

}