<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('greeting', [
    'name' => 'James'
    ]);
    });
Route::get('/user/{id}', [
        UserController::class,
        'show'
        ]);
       
Route::resource('photos', PhotoController::class);
