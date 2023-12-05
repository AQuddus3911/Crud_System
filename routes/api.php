<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\APIController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClientController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/data',[ PagesController::class,'dummyapi']);
Route::get('/create',[APIController::class,'create']);
Route::post('/store',[APIController::class,'add']);
Route::post('/submit-form', [FormController::class,'submitform']);
Route::post('/student', [StudentController::class,'student']);
Route::post('/client', [ClientController::class,'client']);