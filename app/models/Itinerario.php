<?php

class Itinerario extends Eloquent {

	protected $table = 'itinerario';
	public $timestamps = true;
	protected $fillable = array('costo');

	public function vuelos()
	{
		return $this->hasMany('Vuelo', 'id');
	}

}