<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function(){
    return view('index');
});

Route::get('/tech', function(){
    return view('tech/index');
})->name('tech');