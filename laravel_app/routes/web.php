<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/portfolio_list', function () {
    return view('portfolio_list');
});
