<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/a', function()
{
	//seleccionar los dos vuelos asosciados a una solicitud.
	$itineario=Itinerario::find(1);
	$ida=$itineario->id_ida;
	$vuelta=$itineario->id_vuelta;
	$vuelos=Vuelo::where('id','=',$ida)->orWhere('id','=',$vuelta)->get();
	return Response::json(array(
     		"vuelos"=>$vuelos));

	//seleccionar todos los vuelos que tienen como origen y destino: lima trujillo.
	//de antemano sabemos los codigos para cada ciudad.
	$vuelos2=Vuelo::where('id_origen','=',1)->where('id_destino','=',2)->get();
	$vuelos3=Vuelo::where('id_origen','=',2)->where('id_destino','=',1)->get();
	echo 'Itinerario</br>';
	echo 'Vuelo de ida</br>';
	echo $vuelos2;
	echo '</br>Vuelo de vuelta</br>';
	echo $vuelos3;


});
Route::get('/multi',function(){
	return View::make('multi');
});



//tutorial angular
Route::get('/angular-ngRoute',function(){
	return View::make('angular-ngRoute');
});


Route::get('getData', function()
{
 
    $posts = DB::table("posts")->get();
    return Response::json(array(
        "posts"        =>        $posts
    ));
 
});
