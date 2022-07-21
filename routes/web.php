<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\AUTH\AuthMainController;

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
	return redirect(app()->getLocale().'/index');
});


//Route::get('/test', function () {
////	App::setLocale('en');
//	return trans('auth.throttle', ['seconds' => 5]);
//});


Route::post('/registration',[AuthMainController::class,'register'])->name('auth.register');
Route::post('/loginCheck',[AuthMainController::class,'check'])->name('auth.check');

Route::get('/logout',[AuthMainController::class,'logout'])->name('auth.logout');


Route::resource('/insertCategory',CategoriesController::class);

Route::group(['prefix' => '{locale}',
	'where' => ['locale' => '[a-zA-Z]{2}'],
	'middleware' => ['SetLocale','AuthCheck']], function(){
	Route::patch('updateUserInfo',[AuthMainController::class,'updateUserInfo'])->name('auth.updateUserInfo');
	Route::patch('updatePassword',[AuthMainController::class,'updatePassword'])->name('auth.updatePassword');
	Route::post('edit_profile',[AuthMainController::class,'checkPassword'])->name('auth.checkPassword');
	Route::get('{pageName}', [HeaderController::class,'index'])->name('mainRoute');;
});




