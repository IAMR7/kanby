<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('adminhome');

Route::get('/admin/task', [App\Http\Controllers\TaskController::class, 'index'])->name('task');

Route::get('/admin/task/detail/{id}', [App\Http\Controllers\TaskController::class, 'gettask']);

Route::post('/admin/task/add', [App\Http\Controllers\TaskController::class, 'addtask'])->name('addtask');

Route::get('/admin/task/edit/{id}', [App\Http\Controllers\TaskController::class, 'edittask']);

Route::post('/admin/task/edit/update/{id}', [App\Http\Controllers\TaskController::class, 'updatetask']);

Route::get('/admin/task/delete/{id}', [App\Http\Controllers\TaskController::class, 'deletetask']);