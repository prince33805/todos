<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TodoController;

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

Route::get('/', [TodoController::class, 'index'])->name('index');
Route::post('/store', [TodoController::class, 'store'])->name('store');
Route::get('/edit/{id}', [TodoController::class, 'edit'])->name('edit');
Route::get('/delete/{id}', [TodoController::class, 'delete'])->name('delete');
Route::post('/update/{id}', [TodoController::class, 'update'])->name('update');
Route::get('/completed/{id}', [TodoController::class, 'completed'])->name('completed');
