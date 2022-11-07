<?php

use App\Http\Controllers\NavigationController;
use App\Http\Controllers\UserController;
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

Route::get('/coordenador', [UserController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/historico', function( ){return view('historico');})->middleware(['auth', 'verified'])->name('historico');
require __DIR__.'/auth.php';

// ROUTE::get('/',[NavigationController::class, 'home'])->name('home');
