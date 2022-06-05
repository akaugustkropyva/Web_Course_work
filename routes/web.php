<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;


Route::get('/', [PageController::class, 'landing'])->name('landing');

Route::get('/container', [PageController::class, 'container'])->name('container');

Route::get('/container/{value}', [PageController::class, 'posterinfo'])->name('posterinfo');

Route::post('/submit', [PostController::class, 'contacts'])->name('submition');

