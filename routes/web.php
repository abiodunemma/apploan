<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Middleware\AgeCheck;
use App\Http\Controllers\schoolController;
use App\Http\Controllers\uploadController;

Route::get('/', function () {
    return view('welcome');

});

Route::view('add','schools');
Route::post('add',[schoolController::class, 'add']);
Route::get('list',[schoolController::class, 'list']);
Route::get('delete/{id}',[schoolController::class, 'delete']);


Route::view('upload','upload');
Route::post('upload',[uploadController::class, 'upload']);

Route::view('user','user');
Route::view('profile','profile');
//Route::post('add',[UserController::class, 'addUser']);

Route::view('login','login');
Route::post('login',[UserController::class, 'Login']);
 Route::view('form','user');
 Route::post('user',[Usercontroller::class,'login']);
 Route::get('logout',[Usercontroller::class,'logout'])
;