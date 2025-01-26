<?php

use App\Models\Bac;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BacController;
use App\Http\Controllers\TypeController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/bacs', [BacController::class, 'index'])->name('bac.list');
Route::get('/bacs/{bac}', [BacController::class, 'show'])->name('bac.show');
Route::post('/bacs', [BacController::class, 'store'])->name('bac.create');
Route::put('/bacs/{bac}', [BacController::class, 'update'])->name('bac.update');
Route::delete('/bacs/{bac}', [BacController::class, 'destroy'])->name('bac.delete');

Route::get('/types', [TypeController::class, 'index'])->name('type.list');
Route::post('/types', [TypeController::class, 'store'])->name('type.create');
Route::put('/types/{type}', [TypeController::class, 'update'])->name('type.update');
Route::get('/types/{type}', [TypeController::class, 'show'])->name('type.show');