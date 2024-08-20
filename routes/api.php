<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\schoolController;
use App\Models\School;
use SebastianBergmann\Diff\Output\StrictUnifiedDiffOutputBuilder;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('test', function(){
 return ["name=>abbey","sch"=>"test"];
});
Route::get('schools');

Route::get('schools',[SchoolController::class, 'list']);