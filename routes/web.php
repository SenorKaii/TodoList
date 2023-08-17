<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ActivityController::class, 'index'])->name('index');

Route::get('/create-list', [ActivityController::class, 'create'])->name('create-list');
Route::post('/store-list', [ActivityController::class, 'store'])->name('store-list');
Route::get('/edit-list/{activity}', [ActivityController::class, 'edit'])->name('edit-list');
Route::post('/update-list/{activity}', [ActivityController::class, 'update'])->name('update-list');
Route::delete('/delete-list/{activity}', [ActivityController::class, 'delete'])->name('delete-list');




