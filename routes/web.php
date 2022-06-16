<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;


Route::get('/', [PageController::class, 'landing'])->name('landing');

Route::get('/container', [PageController::class, 'container'])->name('container');

Route::get('/news', [PageController::class, 'news'])->name('news');

Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');

Route::get('/aboutus', [PageController::class, 'aboutus'])->name('aboutus');

Route::get('/container/{id}', [PageController::class, 'posterinfo'])->name('posterinfo');

Route::post('/submit', [PostController::class, 'contacts'])->name('submition');

