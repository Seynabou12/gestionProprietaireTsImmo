<?php

use App\Http\Controllers\ProprietaireController;
use App\Http\Controllers\ProprietesController;
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

Route::get('/', [ProprietesController::class, 'welcome'])->name('proprietes.welcome');
Route::get('proprietaire/create', [ProprietaireController::class, 'create'])->name('proprietes.create');
Route::post('proprietaire/store', [ProprietaireController::class, 'store'])->name('proprietaire.store');

Route::get('proprietes/create', [ProprietesController::class, 'create'])->name('proprietes.create');
Route::post('proprietes/store', [ProprietesController::class, 'store'])->name('proprietes.store');

Route::get('proprietes', [ProprietesController::class, 'index']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';