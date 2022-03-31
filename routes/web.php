<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\GraficacomunidadController;
use App\Http\Controllers\GraficaalumnoController;
use App\Http\Controllers\GraficacursoController;
use App\Http\Controllers\GraficapatrocinadorController;
use App\Http\Controllers\GraficaedadesController;
use App\Http\Controllers\GraficaingresoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\FullCalenderController;
use Illuminate\Support\Facades\Auth;


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
    return view('auth.login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::post('/cronogramas/mostrar', [App\Http\Controllers\EventoController::class, 'show']);
// Route::post('/cronogramas/agregar', [App\Http\Controllers\EventoController::class, 'store']);
// Route::post('/cronogramas/editar/{id}', [App\Http\Controllers\EventoController::class, 'edit']);
// Route::post('/cronogramas/actualizar/{evento}', [App\Http\Controllers\EventoController::class, 'update']);
// Route::post('/cronogramas/borrar/{id}', [App\Http\Controllers\EventoController::class, 'destroy']);
Route::get('/charts/orders', [App\Http\Controllers\GraficacomunidadController::class, 'ordersChart'])->name('charts.orders');
Auth::routes();


Route::group(['middleware' => ['auth']], function(){
	Route::resource('roles', RolController::class);
	Route::resource('usuarios', UsuarioController::class);
	Route::resource('alumnos', AlumnoController::class);
	Route::resource('periodos', PeriodoController::class);
	Route::resource('cronogramas', FullCalenderController::class);
	Route::resource('gcomunidad', GraficacomunidadController::class);
	Route::resource('cursos', CursoController::class);
	Route::resource('galumnos', GraficaalumnoController::class);
	Route::resource('gcursos', GraficacursoController::class);
	Route::resource('gpatrocinadores', GraficapatrocinadorController::class);
	Route::resource('gedades', GraficaedadesController::class);
	Route::resource('gingresos', GraficaingresoController::class);
});
Route::controller(FullCalenderController::class)->group(function(){
    Route::get('/fullcalender', 'index');
    Route::post('/fullcalenderAjax', 'ajax');
});