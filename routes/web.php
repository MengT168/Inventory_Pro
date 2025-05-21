<?php

use App\Http\Controllers\frontend\systemController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/dashboard',[systemController::class,'dashboard']);
