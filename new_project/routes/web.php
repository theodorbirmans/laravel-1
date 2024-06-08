<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('index');
Route::get('/', [\App\Http\Controllers\AppController::class, 'index'])->name('index');
