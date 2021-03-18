<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HTTpController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\CrudeController;


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

//get data using api
//Route::get('users',[UserController::class,'index']);

//Route::view('login','form');
Route::view('profile','profile');

Route::get('logout',function(){
    if(session()->has('user')){
        session()->pull('user',null);
    }
    return redirect('form');
});

Route::get('form',function(){
    if(session()->has('user')){

        return redirect('profile');
    }
    return view('form');
});

Route::post('users',[HTTpController::class,'testRequest']);

//storeuser flash-session
Route::view('store','storeuser');
Route::post('storecontroller',[StoreController::class,'member']);

//upload File

Route::view('upload','upload');
Route::post('upload',[UploadController::class,'uploadFile']);

//localization
//Route::view('local','localiza');

Route::get('/local/{lang}', function($lang) {
    App::setlocale($lang);
    return view('localiza');
});


//different controller

//add data in database
Route::view('add','addmember');
Route::post('add',[CrudeController::class,'addData']);

//pagination and view
Route::get('list',[CrudeController::class,'show']);
Route::get('add',[CrudeController::class,'shows']);



//update and delete
Route::get('delete/{id}',[CrudeController::class,'delete']);
Route::get('update/{id}',[CrudeController::class,'showData']);
Route::post('update',[CrudeController::class,'updateData']);


Route::get('query',[CrudeController::class,'operations']);




