<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('admin/index');
})->name('admin');


Route::get('/home', function(){
    return view('index');
})->name('home');

Route::get('/tech', function(){
    return view('tech/index');
})->name('tech');

Route::get('/sports', function(){
    return view('/sports/index');
})->name('sports');