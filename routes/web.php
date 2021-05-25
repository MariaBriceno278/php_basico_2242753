<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('variables', function () {
    $mensaje = 20;
    //funcion nativa de php: analizar el contenido de
    //variable: tipo de dato, datos
    var_dump($mensaje);

    echo "<hr />";
    $mensaje ="Hola 2242753";
    var_dump($mensaje);
});


Route::get('arreglos', function () {
    //definir un arreglo en php
    //Tamaño de arreglo el numero de elementos
    //Tamaño del arreglo estudiantes es 3
    $estudiantes =[ "AN"=> "Ana" ,
    "MA"=> "Maria" ,
    "JO"=> "Jorge" ];
    echo "<pre>";
    print_r($estudiantes);
    echo"<pre/>";
});

Route::get('paises', function () {
    $paises = [
    "Colombia" => [ "capital"=> "Bogotá",
                    "moneda"=> "Peso",
                    "poblacion"=> 51 ],
    "Peru" => [     "capital"=> "Lima",
                    "moneda"=> "Sol",
                    "poblacion"=> 33.19] ,
    "Paraguay" => [
                    "capital"=> "Asunción",
                    "moneda"=> "Guaraní paraguayo",
                    "poblacion"=> 7],
    "Argentina" => [
                    "capital"=> "Buenos Aires",
                    "moneda"=> "Peso Argentino",
                    "poblacion"=> 44.94],
];

//mostrar la vista de paises
//llevando el arreglo de paises

return view('paises')->with("naciones", $paises);

});
Route::get('mostrar_formulario', 'MetabuscadorController@mostrar_formulario');

Route::post('buscar_termino', 'MetabuscadorController@buscar_termino' );
