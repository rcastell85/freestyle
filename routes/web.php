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

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
if ($options['register'] ?? true) {
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');
}

// Password Reset Routes...
if ($options['reset'] ?? true) {
    Route::resetPassword();
}

// Email Verification Routes...
if ($options['verify'] ?? false) {
    Route::emailVerification();
}

Route::get('/home', 'HomeController@index')->name('home');

                // Rutas de Perfil.....
Route::get('/cargarPerfil', function () {
    return view('cargarPerfil');
});
Route::post('/cargarPerfil', 'ProfileController@store');

Route::get('/inicio', 'InicioController@index')->middleware("auth");
Route::post('/inicio', 'InicioController@store');       //cambiar

Route::get('/crearPost', function(){
  return view('crearPost');
});
Route::post('/crearPost', 'PostController@store');
Route::get('/crearPost', 'PostController@show');

Route::post('/like', 'PostController@like');

Route::post('/buscar', 'SearchController@index');
Route::get('/buscar', 'SearchController@show');

Route::get('/perfilUsuario', function(){
  return view('perfilUsuario');
});
Route::get('/perfilUsuario', 'PostController@mostrarPerfil');
