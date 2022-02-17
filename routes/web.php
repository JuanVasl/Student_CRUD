<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


//Read Student
Route::get('/', [StudentController::class, 'studentread']);
//Formulario Creat Student
Route::get('/Student/Create', [StudentController::class, 'studentform']);
//Save Student
Route::post('/Student/Save', [StudentController::class, 'save'])->name('save');
