<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BierController;

Route::get('/', function () {
    return view('welcome');
});

// Routes voor bier functionaliteiten
Route::get('/bieren/boom', [BierController::class, 'boom'])->name('bieren.boom');
Route::get('/bieren/{id}/andere-bieren', [BierController::class, 'andereBieren'])->name('bieren.andere');
Route::get('/categorie/{categorieId}/bieren', [BierController::class, 'bierenPerCategorie'])->name('bieren.per_categorie');
Route::get('/bieren/met-submerken', [BierController::class, 'merkenMetSubmerken'])->name('bieren.met_submerken');
