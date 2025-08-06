<?php

use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Tech\TechController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('admin/index');
})->name('admin');


Route::get('/',[HomeController::class, 'index'])->name('home');

Route::get('/tech', [TechController::class, 'index'])->name('tech');

Route::get('/sports', function(){
    return view('/sports/index');
})->name('sports');

Route::get('/politic', function(){
    view('politics/index');
})->name('politic');

Route::get('/check', [HomeController::class, 'index']);