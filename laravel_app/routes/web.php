<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/portfolio-list', [PortfolioController::class, 'index']);
Route::get('/portfolio-post', [PortfolioController::class, 'create']);
Route::post('/portfolio-post', [PortfolioController::class, 'store']);
Route::get('/portfolio-show/{id}', [PortfolioController::class, 'show']);

Route::get('/portfolio-chat', function () {
    return view('portfolio-chat');
})->name('portfolio.chat');
