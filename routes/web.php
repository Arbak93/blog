<?php

use App\Http\Controllers\ABCController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CollectionController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormtController;
use App\Http\Controllers\IdentitycardController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
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
Route::get(
    'collect1',
    [CollectionController::class, 'collection_class']
);
Route::get(
    'src_collection',
    [CollectionController::class, 'search_data']
);
Route::get(
    'filter_collection',
    [CollectionController::class, 'filter_data']
);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('add-form', [FormtController::class, 'index']);
Route::post('siting-form',[ FormtController::class, 'store']);

Route::get('/add', [ABCController::class, 'index']);
Route::get('/identity',[IdentitycardController::class,'index']);
Route::get('/wrap',[UserController::class,'index']);
Route::get('/brand',[BrandController::class,'index']);
Route::get('/product',[ProductController::class,'index']);
