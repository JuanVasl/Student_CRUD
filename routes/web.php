<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


//Read Student
Route::get('/', [StudentController::class, 'studentread']);
//Formulario Creat Student
Route::get('/Student/Create', [StudentController::class, 'studentform']);
//Save Student
Route::post('/Student/Save', [StudentController::class, 'save'])->name('save');
//formulario Update Student
Route::get('/Student/Update', [StudentController::class, 'update'])->name('update');
//Update Student
Route::patch('/Student/edit/{id}', [StudentController::class, 'edit'])->name('edit');
//Delete Student
Route::delete('/Student/delete/{id}', [StudentController::class, 'delete'])->name('delete');
