<?php

class Ciudad extends Eloquent {

	protected $table = 'ciudad';
	public $timestamps = false;
	protected $fillable = array('nombre');

}