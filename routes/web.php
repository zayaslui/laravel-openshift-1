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
