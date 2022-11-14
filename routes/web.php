<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\CountryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/', function () {
//     return view('greeting',['name'=>'axpers']);
// });



// Route::get('/', function () {
//     return view('greeting', ["records" => ['a', 'b', 5]]);
// });
Route::get('/jj', function () {
    return view('child');
});
Route::get('/', function () {
    return 'Hello World';
});

Route::get('/user/{id}', [
    UserController::class,
    'show'
    ]);

Route::resource('photos', PhotoController::class);

 //route::get('greeting',[CountryController::class, 'index']);

 Route::get('/', function () {
        return view('greeting', [CountryController::index()]);
     });
route::get('users',[userController::class,'index']);