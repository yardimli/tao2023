<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HeaderController;

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
	return redirect('index');
});

Route::resource('/{pageName}', HeaderController::class);

Route::resource('/insertCategory',CategoriesController::class);

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});
