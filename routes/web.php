<?php


use App\Http\Controllers\system\systemController;
use App\Http\Controllers\system\userController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',         [userController::class, 'signIn'])->name('login');
Route::post('/signUpSubmit',[userController::class,'signUpSubmit']);
Route::get('/signup',         [userController::class, 'signUp']);
Route::post('/signInSubmit',[userController::class,'signInSubmit']);
Route::get('/logout', [userController::class,'logout'])->name('logout');
// Route::get('/dashboard',[systemController::class,'dashboard']);

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [systemController::class, 'dashboard']);
});

