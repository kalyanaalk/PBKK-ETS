<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FormController;
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
    
    Route::get('/result', [FormController::class, 'index']);
    Route::post('/form', [FormController::class, 'store']);
    
    Route::get('/form', [FormController::class, 'create']);
    // Route::post('/result', [FormController::class, 'store']);
    
    Route::get('/result/{id}', [FormController::class, 'show']);
    Route::get('/result/{id}/edit', [FormController::class, 'edit']);
    Route::put('/result/{id}', [FormController::class, 'update']);
    Route::delete('/result/{id}', [FormController::class, 'destroy']);
});

require __DIR__.'/auth.php';
