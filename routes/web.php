<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AnimalController;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::prefix('animals')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('animals.index');          
    Route::get('/create', [AnimalController::class, 'createStatic'])->name('animals.create'); 
    Route::get('/edit/{id}', [AnimalController::class, 'editStatic'])->name('animals.edit');  
    Route::get('/delete/{id}', [AnimalController::class, 'delete'])->name('animals.delete');  
    Route::get('/{id}', [AnimalController::class, 'show'])->name('animals.show');           
});

Route::fallback(function () {
    return response()->view('errors.not-found', [], 404);
});

