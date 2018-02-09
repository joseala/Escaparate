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



Auth::routes();

Route::get('/', 'CategoriasController@index');
Route::get('/categorias/{id}', 'CategoriasController@show');
Route::get('/categorias/{idc}/productos/{idp}', 'ProductosController@show');
//Route::get('/verificar/email/{code}', 'RegisterController@verify');
Route::get('/home',function(){
    $data = array(
        'name' => 'Enviado por App Laravel',
    );
    //dd(Config::get('mail'));
    
    Mail::send('emails.welcome', $data, function($message){
        $user = Illuminate\Support\Facades\Auth::user();
        $message->from('jmalamillo79@gmail.com', 'Curso Laravel');
        $message->to($user->email)->subject('Prueba email app Laravel');
        
    });
    return view('emails.confirmation_code');
    
});
Route::resource('categorias', 'CategoriasController');
Route::resource('categorias.productos', 'ProductosController');
