<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;

Route::get('/',[studentController::class,'viewFrom']);
Route::post('/add-student',[studentController::class,'add-student']);