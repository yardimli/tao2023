<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\CropImageController;
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
	return redirect('index');
});


//Route::get('/index', function () {
//	return view('index');
//});

Route::get('crop-image-before-upload-using-croppie', [CropImageController::class,'index']);
Route::post('crop-image-before-upload-using-croppie',[CropImageController::class,'uploadCropImage'])->name('croppie.upload-image');


Route::post('/registration',[AuthMainController::class,'register'])->name('auth.register');
Route::post('/loginCheck',[AuthMainController::class,'check'])->name('auth.check');

Route::get('/logout',[AuthMainController::class,'logout'])->name('auth.logout');


Route::resource('/insertCategory',CategoriesController::class);

Route::group(['middleware' => ['AuthCheck']], function(){
	Route::patch('/updateUserInfo',[AuthMainController::class,'updateUserInfo'])->name('auth.updateUserInfo');
	Route::patch('/updatePassword',[AuthMainController::class,'updatePassword'])->name('auth.updatePassword');
	Route::resource('/{pageName}', HeaderController::class);
});




