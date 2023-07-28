<?php

use App\Http\Controllers\TaskController;
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

//Route::get('/', function () {
  //  return view('welcome');
//});

//Route untuk menampilkan semua task
Route::get('/', [TaskController::class, 'index']);

//Route untuk menampilkan data task berdasarkan id
// Route::get('/task/{id}', [TaskController::class, 'show']);

Route::get('/task/{id}', [TaskController::class, 'show'])->name('tasks.show');