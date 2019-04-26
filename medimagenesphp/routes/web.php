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

Route::get('/','PagesController@inicio')->name('inicio');
/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('blog', function () {
    return view('blog');
})->name('blog');

Route::get('fotos','PagesController@fotos')->name('foto');
/*Route::get('fotos', function () {
    return view('fotos');
})->name('foto');*/

Route::get('nosotros', function () {
    $equipo=['Carlos','Ligia','Pepe'];
    //return view('nosotros',['equipo'=>$equipo]);
    return view('nosotros',compact('equipo'));
})->name('nosotros');


Route::get('ruta/{numero?}', function ($numero='sin dato') {
    return "que mas ve ".$numero;
})->where('numero','[0-9]+');

Route::view('galeria','fotos',['numero'=>'otro valor']);






Route::get('contactanos','PagesController@contactanos')->name('contactanos');
Route::get('nosotros','PagesController@nosotros')->name('nosotros');
Route::get('empresa','PagesController@empresa')->name('empresa');
Route::get('servicioResonancia','PagesController@servicioResonancia')->name('servicioResonancia');
Route::get('servicioTomografia','PagesController@servicioTomografia')->name('servicioTomografia');
Route::get('servicioEcografia','PagesController@servicioEcografia')->name('servicioEcografia');
Route::get('servicioRayosX','PagesController@servicioRayosX')->name('servicioRayosX');
Route::get('servicioMamografia','PagesController@servicioMamografia')->name('servicioMamografia');
Route::get('servicioDensitometria','PagesController@servicioDensitometria')->name('servicioDensitometria');
