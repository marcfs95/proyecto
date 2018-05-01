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
    return redirect('/landing');
});
// Route::get('/landing', function () {
//     //posar vistes per provar sense haver de fer login
//     return view('monster.landing');
// })->name('landing');

// Auth::routes();->evitamos el acceso a este metodo copiando todas las rutas de autentificacion aqui.
// Rutas de autentificacion
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Rutas registro
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Rutas reseteo de password
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// Ruta landing inicial
Route::get('/landing', 'LandingController@index')->name('inicio');

// Grupo de rutas para administacion /admin/...
Route::group(['prefix' => 'admin'], function () {

    // Ruta para proyecto concreto
    Route::get('/{proyecto}', 'ProjectController@index')->name('project');
    
    // Ruta para crear nuevo proyecto
    Route::get('nuevo-proyecto', function(){
        return "creacion de nuevo proyecto";
    })->name('nuevo-proyecto');

    // Ruta para gestionar usuarios
    Route::get('usuarios', function(){
        return "logistica de usuarios";
    })->name('usuarios');

    // Ruta para gestionar clientes
    Route::get('clientes', function(){
        return "logistica de clientes";
    })->name('clientes');

});

