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
                    "poblacion"=> 7]
];
  /* Recorrer el arreglo de paises */

    foreach($paises as  $indice => $valor){
    echo "<h1>$indice<h1>";
    echo"<pre>";
    print_r($valor["capital"]);
    echo"</pre>";
    echo"<hr />";
    };

});
