<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aboutme', function () {
    return view('aboutMe');
});

//PORTFOLIO ROUTES//
Route::get('/home', [PageController::class,'home'])->name('home'); //Homepage
Route::get('/skills', [PageController::class,'skills'])->name('skills'); //Skills
Route::get('/gallery', [PageController::class,'gallery'])->name('gallery'); //Gallery
