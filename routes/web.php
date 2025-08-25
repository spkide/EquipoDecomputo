<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipoController;

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


Route::get('equipos', [EquipoController::class, 'index'])->name('equipos.index');
Route::get('equipos/create', [EquipoController::class, 'create'])->name('equipos.create');
Route::post('equipos', [EquipoController::class, 'store'])->name('equipos.store');
Route::get('equipos/{equipo}', [EquipoController::class, 'show'])->name('equipos.show');
Route::get('equipos/{equipo}/edit', [EquipoController::class, 'edit'])->name('equipos.edit');
Route::put('equipos/{equipo}', [EquipoController::class, 'update'])->name('equipos.update');
Route::delete('equipos/{equipo}', [EquipoController::class, 'destroy'])->name('equipos.destroy');
