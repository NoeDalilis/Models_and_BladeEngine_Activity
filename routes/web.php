<?php

use Illuminate\Support\Facades\Route;

Route::get('/books', [App\Http\Controllers\BookController::class, 'index']);
