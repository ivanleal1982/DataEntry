<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CensosController;
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

/*
/*
//Route::get('/index',[CensosController::class, 'welcome']);
*/
/*

*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/tareas',function () {
    return view('todos.index');
})->name('todos');

Route::get('/tareas', [CensosController::class, 'index'])->name('todos');

Route::post('/tareas', [CensosController::class, 'store'])->name('todos');

Route::get('/tareas{id}', [CensosController::class, 'show'])->name('todos-edit');
Route::patch('/tareas{id}', [CensosController::class, 'update'])->name('todos-update');

Route::delete('/tareas{id}', [CensosController::class, 'destroy'])->name('todos-destroy');

/*

Route::get('/tareas/{$id}', [CensosController::class, 'show'])->name('todos-edit');
//Route::get('/tareas/', [CensosController::class, 'show'])->name('todos-edit');

 */


