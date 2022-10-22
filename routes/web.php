<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController; //add the ControllerNameSpace
 

 
Route::resource("/student", StudentController::class);