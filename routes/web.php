<?php

use App\Http\Controllers\NavigationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\usuarioController;
use App\Http\Controllers\cadastroController;
use App\Http\Controllers\excelController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/2Chamada', [UserController::class,'index'])->middleware(['auth', 'verified'])->name('inicial');
Route::post('/2Chamada', [UserController::class,'index'])->middleware(['auth', 'verified'])->name('inicial2');
Route::get('/historico', [usuarioController::class,'index'])->name('historico');
require __DIR__.'/auth.php';
Route::get('/formulario', [cadastroController::class,'index'])->name('formulario');
Route::post('/envio',[cadastroController::class,'store'])->name('envio');
Route::post('/excel',[excelController::class,'exportaExcel'])->name('excel');
// ROUTE::get('/envio',[NavigationController::class, 'home'])->name('home');
