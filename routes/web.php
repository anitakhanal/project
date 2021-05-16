<?php

use App\Http\Controllers\UserController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/users' , [UserController::class , 'index']);
Route::get('/users/create' , [UserController::class , 'create']);
Route::post('/users' , [UserController::class , 'store'])->name('users.store');
Route::get('/users/edit/{id}' , [UserController::class , 'edit']);
Route::post('update/{id}' , [UserController::class , 'update'])->name('users.update');
Route::get('delete/{id}' , [UserController::class , 'destroy']);

require __DIR__.'/auth.php';

Route::get('/add', function () {
    return view('users.addusers');
});

