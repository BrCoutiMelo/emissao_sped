<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\NotaFiscalController;

Route::get('/nota-fiscal', [NotaFiscalController::class, 'create'])->name('nota-fiscal.create');
Route::post('/nota-fiscal', [NotaFiscalController::class, 'store'])->name('nota-fiscal.store');
