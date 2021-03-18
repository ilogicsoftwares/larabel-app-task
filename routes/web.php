<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',function (){
    return view('welcome');
});
//TASKS
Route::get('/task',[TaskController::class,'index']);
Route::get('/task/{task}',[TaskController::class,'edit']);
Route::post('/task/create',[TaskController::class,'store']);
Route::put('/task/{task}',[TaskController::class,'update']);
Route::delete('/task/remove/{task}',[TaskController::class,'destroy']);

//USER TASKS

Route::get('/user',[UserController::class,'index']);

