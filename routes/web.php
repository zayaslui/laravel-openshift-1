<?php

use Illuminate\Http\Request;

// use Illuminate\Routing\Middleware\SubstituteBindings;
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

Route::get('/','FrontController@index');
Route::get('obras','FrontController@obras');
Route::get('services','FrontController@services');
Route::get('about','FrontController@about');
Route::get('contact','FrontController@contact');
Route::get('admin','FrontController@admin');
Route::get('prensa','FrontController@prensa');
Route::get('compromiso','FrontController@compromiso');
Route::get('emprende_con_nosotros','FrontController@emprende_con_nosotros');

Route::get('/services/hormigon','FrontController@servicios_hormigon');
Route::get('/services/prefabricacion','FrontController@servicios_prefabricacion');
Route::get('/services/mineria','FrontController@servicios_mineria');
Route::get('/services/concreto','FrontController@servicios_concreto');

/*pruebas layers*/
Route::get('layer_demo','FrontController@layer_demo');
Route::get('demo','FrontController@demo');

Route::post('puta','FrontController@puta');
/*pruebas layers*/
Route::get('prueba','FrontController@prueba');

// ajax
Route::post('listarObras','FrontController@listar');
Route::post('little','FrontController@little_obras');
Route::post('listarPrensa','FrontController@listarPrensa');

Route::get('obras_det/{imagen}','FrontController@obras_det');
// traer el detalle de la obra
Route::post('singleObras/{id}','FrontController@detalle_obra');

// errores
Route::get ('404', ['as' => '404', 'uses' => 'ErrorHandlerController@errorCode404']);
Route::get ('405', ['as' => '405', 'uses' => 'ErrorHandlerController@errorCode405']);

//admin

// Route::get('admin','FrontController@admin');

// Route::resource('usuario','UsuariosController');

Route::get('usuario','UsuariosController@index');
Route::get('usuario/listar','UsuariosController@listar');
Route::post('usuario','UsuariosController@store');
Route::GET('usuario/create','UsuariosController@create');
Route::get('usuario/{user}','UsuariosController@show');
Route::put('usuario/{user}','UsuariosController@update');
Route::get('usuario/{user}/edit','UsuariosController@edit');
Route::delete('usuario/{user}','UsuariosController@destroy');


Route::resources([
								'layersliders'=>'LayerSlidersController',
								'obras_' => 'ObrasController',
							]);
Route::get('listar_obras','ObrasController@listar_obras');

Route::get('sliders','SliderController@index');
Route::get('sliders/listar','SliderController@listar');
Route::post('sliders','SliderController@store');
Route::GET('sliders/create/{slider}','SliderController@create');
Route::get('sliders/{slider}','SliderController@show');
Route::put('sliders/{slider}','SliderController@update');
Route::get('sliders/{slider}/edit','SliderController@edit');
Route::delete('sliders/{slider}','SliderController@destroy');


Route::get('layers','LayersController@index');
Route::get('layers/listar','LayersController@listar');
Route::post('layers','LayersController@store');
Route::GET('layers/create','LayersController@create');
Route::get('layers/{layer}','LayersController@show');
Route::put('layers/{layer}','LayersController@update');
Route::get('layers/{layer}/edit','LayersController@edit');
Route::delete('layers/{layer}','LayersController@destroy');

/*listar datatables*/
Route::get('layersliders_data','LayerSlidersController@listar');
/*listar datatables layers*/
Route::get('layers_data/{id}','LayerSlidersController@listar_layers');

/*metodos que no aparecen en LayerSlidersController */
// Route::get('show_sliders/{id}','LayerSlidersController@show_sliders');

// datatables
Route::get('create', 'DisplayDataController@create');
Route::get('datatables', 'DisplayDataController@data');

// pruebas datatables
Route::get('listar_datatables', 'DisplayDataController@createData');


Route::get('users/{user}', function (App\User $user) {
    return $user;
});
/*
|--------------------------------------------------------------------------
| Readiness Probe
|--------------------------------------------------------------------------
|
| A readiness probe determines if a container is ready to service requests.
| If the readiness probe fails a container, the endpoints controller ensures
| the container has its IP address removed from the endpoints of all services.
| A readiness probe can be used to signal to the endpoints controller that
| even though a container is running, it should not receive any traffic
| from a proxy. Set a readiness check by configuring the
| template.spec.containers.readinessprobe stanza of a pod configuration.
|
*/
Route::get('health.php', function () {
    try {
        \DB::connection()->getPdo();
        return 'OK';
    } catch (\Exception $e) {
        abort(500, "Connection failed: " . $e->getMessage());
    }
});

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Route::get('admin', 'HomeController@admin')->name('admin');



// mail
Route::get('mail', 'HomeController@mail');