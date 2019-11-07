<?php

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

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/get', function () {
    return "este es por GET";
});

Route::post('/post', function () {
    return "este mensaje es por POST";
});

Route::GET('hola/{nombre?}/{edad?}', function ($nombre=null, $edad=null) {
    return view('contacto/contacto')
    ->with('nombre', $nombre)
    ->with('edad', $edad)
    ->with('frutas', ['fresa',
                    'manzana',
                    'pera']);
}) ->where([
    'nombre'=>'[A-Za-z]+',
    'edad'  =>'[0-9]+'
]);
*/
Route::get('/',function(){
    return view('welcome');
});

Route::get('/get',function(){
    return 'este mensaje es por GET';
});

Route::post('/post',function(){
    return 'este mensaje es por POST';
});

Route::get('/hola-mundo',function(){
    return view('holaMundo');
});

Route::GET('hola/{nombre?}/{edad?}',function($nombre='Gabriel',$edad=20){
    return view('contacto/contacto')
    ->with('nombre', $nombre)
    ->with('edad', $edad)
    ->with('frutas', ['fresa',
                    'pera',
                    'manzana']);
}) ->where([
    'nombre'=>'[A-Za-z]+',
    'edad'=>'[0-9]+'
]);

