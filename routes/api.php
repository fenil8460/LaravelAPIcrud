<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DummyController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get("data",[DummyController::class,'getDataApi']);

Route::get("data",[DummyController::class,'listAll']);
Route::get("data/{id?}",[DummyController::class,'list']);

Route::post("addDataApi",[DummyController::class,'addDataApi']);
Route::put("putDataApi",[DummyController::class,'putDataApi']);
Route::delete("deleteDataApi",[DummyController::class,'deleteDataApi']);

Route::post("addDataApivue",[DummyController::class,'addDataApivue']);
Route::get("datavue",[DummyController::class,'listAllvue']);
Route::get("datavue/{id}",[DummyController::class,'listAllvueid']);
Route::put("putDataApivue/{id}",[DummyController::class,'putDataApivue']);
Route::delete("deleteDataApivue/{id}",[DummyController::class,'deleteDataApivue']);
