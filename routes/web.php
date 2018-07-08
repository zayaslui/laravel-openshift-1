<?php

use Illuminate\Http\Request;
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

Route::get('/services/hormigon','FrontController@servicios_hormigon');
Route::get('/services/prefabricacion','FrontController@servicios_prefabricacion');
Route::get('/services/mineria','FrontController@servicios_mineria');
Route::get('/services/concreto','FrontController@servicios_concreto');


/*pruebas layers*/
Route::get('layers','FrontController@layer_demo');

// ajax
Route::post('listarObras','FrontController@listar');
Route::get('little','FrontController@little_obras');

Route::get('obras_det/{imagen}','FrontController@obras_det');
// traer el detalle de la obra
Route::post('singleObras/{id}','FrontController@detalle_obra');

// errores
Route::get ('404', ['as' => '404', 'uses' => 'ErrorHandlerController@errorCode404']);
Route::get ('405', ['as' => '405', 'uses' => 'ErrorHandlerController@errorCode405']);
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
