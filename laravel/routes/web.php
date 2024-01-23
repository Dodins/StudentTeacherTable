<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', [StudentController::class, 'index'])->name('student.index');
Route::get('/students/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/students', [StudentController::class, 'register'])->name('student.register');
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('student.edit');
Route::put('/students/{id}/update', [StudentController::class, 'update'])->name('student.update');
Route::delete('students/{id}/delete',[StudentController::class, 'delete'])->name('student.delete');


Route::get('/teachers', [TeacherController::class, 'index'])->name('teacher.index');
Route::get('/teachers/create', [TeacherController::class,'create'])->name('teacher.create');
Route::post('/teachers', [TeacherController::class, 'store'])->name('teacher.store');
Route::get('/teachers/{id}/edit',[TeacherController::class, 'edit'])->name('teacher.edit');
Route::put('/teachers/{id}/update',[TeacherController::class, 'update'])->name('teacher.update');
Route::delete('/teachers/{id}/delete', [TeacherController::class, 'delete'])->name('teacher.delete');