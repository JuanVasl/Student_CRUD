<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Student/Create', [StudentController::class, 'studentform']);
Route::post('/Student/Save', [StudentController::class, 'save'])->name('save');
