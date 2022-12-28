<?php

use App\Http\Controllers\frontend\pageController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;


// page route
Route::controller(pageController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('services', 'servicesPage')->name('services');
    Route::get('portfolio', 'portfolioPage')->name('portfolio');
    Route::get('project', 'singlePortfolio')->name('project');
    Route::get('blog', 'blogs')->name('blog');
    Route::get('post', 'singlePost')->name('post');
    Route::get('contact', 'contactPage')->name('contact');
    Route::get('about', 'aboutPage')->name('about');
    Route::get('400page', 'pageNotFound')->name('400page');
    Route::get('team', 'teamMember')->name('teamMember');
});


