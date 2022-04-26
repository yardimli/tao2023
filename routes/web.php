<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;

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

Route::get('/index', function () {
    return view('index');
});

Route::get('/categories', function () {
	return view('categories');
});


Route::get('/404', function () {
	return view('404');
});

Route::get('/archive', function () {
	return view('archive');
});

Route::get('/author', function () {
	return view('author');
});

Route::get('/contact', function () {
	return view('contact');
});

Route::get('/search', function () {
	return view('search');
});


Route::get('/single', function () {
	return view('single');
});

Route::get('/typography', function () {
	return view('typography');
});

Route::resource('/insertCategory',CategoriesController::class);
