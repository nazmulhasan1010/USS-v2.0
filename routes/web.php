<?php

use App\Http\Controllers\frontend\pageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [pageController::class, 'index']);
