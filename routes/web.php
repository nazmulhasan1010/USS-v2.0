<?php

use App\Http\Controllers\frontend\pageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [pageController::class, 'index']);
Route::get('services', [pageController::class, 'servicesPage'])->name('services');
Route::get('portfolio', [pageController::class, 'portfolioPage'])->name('portfolio');
Route::get('project', [pageController::class, 'singlePortfolio'])->name('project');
Route::get('blog', [pageController::class, 'blogs'])->name('blog');
Route::get('post', [pageController::class, 'singlePost'])->name('post');
Route::get('contact', [pageController::class, 'contactPage'])->name('contact');
Route::get('about', [pageController::class, 'aboutPage'])->name('about');
Route::get('400page', [pageController::class, 'pageNotFound'])->name('400page');
