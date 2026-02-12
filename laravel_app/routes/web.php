<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/portfolio-list', function () {
    return view('portfolio-list');
});

Route::get('/portfolio-post', function () {
    return view('portfolio-post');
});

Route::get('/portfolio-show', function () {
    return view('portfolio-show');
})->name('portfolio.show');
