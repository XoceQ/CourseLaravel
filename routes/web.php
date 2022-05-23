<?php
//Controladores:
//el intermediario entre la vista y el modelo, se encarga de controlar las interacciones del usuario en la vista,
// pide los datos al modelo y los devuelve de nuevo a la vista para que esta los muestre al usuario.
//vistas:
// es la encargada de mostrar la información al usuario, con de forma gráfica y legible. 

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', HomeController::class); 

Route::resource('cursos', CursoController::class);

/* 12213 */
?>

