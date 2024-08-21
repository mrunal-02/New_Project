<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

//Route::get('/test', function () {
    //return view('test');
//});

//Route::post('/calculate', [CalculatorController::class, 'Calculate'])->name('calculate');

Route::get('/calculator', [CalculatorController::class, 'index']);
Route::post('/calculate', [CalculatorController::class, 'calculate']);
