<?php

use App\Http\Controllers\SerieController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SerieController::class,"index"]
)->name('serie.index');

Route::get('/detail/{name}', [SerieController::class,"show"]
)->name('serie.show');

