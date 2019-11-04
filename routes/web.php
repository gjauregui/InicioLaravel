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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/get', function () {
    return 'hola, este mensaje es por GET';
});

Route::post('/post', function () {
    return 'hola, este mensaje es por POST';
});
Route::any('hola/{nombre?}/{edad?}', function ($nombre='Gabriel',$edad=20) {
    return view('contacto/contacto')
            ->with('nombre',$nombre)
            ->with('edad',$edad)
            ->with('frutas',['zandia',
                            'fresa',
                            'pera',
                            'naranja']);
}) ->where([
    'nombre'=>'[A-Aa-z]+',
    'edad'=>'[1-9]+'
]);


