<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProprietesController;
use App\Http\Controllers\ProprietaireController;
use App\Http\Controllers\TypeProprietesController;

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

Route::get('typeProprietes/create', [TypeProprietesController::class, 'create'])->name('typeProprietes.create');
Route::post('typeProprietes/store', [TypeProprietesController::class, 'store'])->name('typeProprietes.store');



Route::get('proprietaire/create', [ProprietaireController::class, 'create'])->name('proprietaire.create');
Route::post('proprietaire/store', [ProprietaireController::class, 'store'])->name('proprietaire.store');
Route::get('proprietaire/liste', [ProprietaireController::class, 'liste'])->name('proprietaire.liste');
Route::get('proprietaire/show', [ProprietaireController::class, 'show'])->name('proprietaire.show');


Route::get('proprietes/create', [ProprietesController::class, 'create'])->name('proprietes.create');
Route::post('proprietes/store', [ProprietesController::class, 'store'])->name('proprietes.store');
Route::get('proprietes/liste', [ProprietesController::class, 'liste'])->name('proprietes.liste');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';