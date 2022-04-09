<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [StudentController::class, 'index'])->name('student.index');
Route::get('/students/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/students/create', [StudentController::class, 'store'])->name('student.store');
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('student.edit');
Route::post('/students/{id}/edit', [StudentController::class, 'update'])->name('student.update');
Route::get('/students/{id}/delete', [StudentController::class, 'delete'])->name('student.delete');
Route::get('/search', [StudentController::class, 'search']);
