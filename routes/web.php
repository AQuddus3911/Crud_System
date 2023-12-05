<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeDataController;
use App\Http\Controllers\UploadController;
use App\Models\EmployeeData;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\QueryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
   
});
   // Route::group(['prefix' =>'/employeedata' ],function(){
    Route::resource('/employeedata', EmployeeDataController::class);
    Route::get('/employeedata/views',[EmployeeDataController::class, 'view']);
//});
 
 Route::get('/upload', function(){
    return view('upload');
 });
 Route::post('/upload', [UploadController::class,'upload']);
 Route::get('/pages',[PagesController::class,'welcome']);
 Route::get('/employee/{id}',[EmployeeDataController::class,'employee']);
 Route::get('/data',[IndexController::class,'index']);
 Route::get('/show/{id}',[IndexController::class,'show']);
 Route::get('/event',[EventController::class,'index']);
 Route::get('/query',[QueryController::class,'query']);