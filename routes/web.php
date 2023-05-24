<?php

use App\Http\Controllers\CompteController;
use App\Http\Controllers\ForfaitController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/index' , [CompteController::class , 'index'])->name('acceuil');
Route::post('/index' , [CompteController::class , 'store'])->name('creation');

Route::get('/historiques/{id}' , [CompteController::class , 'historique']);

Route::get('/compte/{id}' , [ForfaitController::class , 'index'])->name('listeForfait');
Route::post('/forfait/{id}' , [ForfaitController::class , 'store'])->name('forfait.store');

 

