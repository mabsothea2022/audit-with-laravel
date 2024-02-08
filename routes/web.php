<?php

use App\Http\Controllers\checkpermissionController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Create new route
Route::resource('audit-soft',checkpermissionController::class);
