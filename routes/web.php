<?php

use App\Http\Controllers\ConsumoElectricoController;
use App\Http\Controllers\DispositivosController;
use App\Models\consumo_electrico;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('consumo', [ConsumoElectricoController::class, 'show'])->name('project.consumo');

Route::middleware(['auth:sanctum', 'verified'])->get('dispositivos', [DispositivosController::class, 'show'])->name('project.dispositivos');