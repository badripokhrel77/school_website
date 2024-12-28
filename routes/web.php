<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

//Frontend
Route::get('/',[FrontendController::class, 'index']);
Route::get('/home',[FrontendController::class, 'home']);
Route::get('/about',[FrontendController::class, 'about']);
Route::get('/contact',[FrontendController::class, 'contact']);
Route::get('/courses',[FrontendController::class, 'courses']);
Route::get('/team',[FrontendController::class, 'team']);
Route::get('/testimonial',[FrontendController::class, 'testimonial']);

//Admin
Route::prefix('admin')->group(function() {

    Route::get('/', [AdminController::class, 'index']);

    Route::resource('team', TeamController::class);
});
