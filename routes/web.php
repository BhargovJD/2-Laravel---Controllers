<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',[DemoController::class, 'index']);

Route::get('/home',[DemoController::class, 'home']);

Route::get('/courses',SingleActionController::class);


Route::resource('photo',PhotoController::class);






