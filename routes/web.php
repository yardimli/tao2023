<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\Controller;

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


//Route::get('/index', function () {
//	return view('index');
//});


Route::post('/registration',[\App\Http\Controllers\Auth\AuthMainController::class,'register'])->name('auth.register');
Route::post('/loginCheck',[\App\Http\Controllers\Auth\AuthMainController::class,'check'])->name('auth.check');
Route::get('/logout',[\App\Http\Controllers\Auth\AuthMainController::class,'logout'])->name('auth.logout');


Route::resource('/insertCategory',CategoriesController::class);

Route::group(['middleware' => ['AuthCheck']], function(){
	Route::resource('/{pageName}', HeaderController::class);
});



