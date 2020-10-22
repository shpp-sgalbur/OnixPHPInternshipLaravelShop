<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\UserController;

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
    return view('layouts.main');
});
Route::get('/catalog', function () {
    return view('layouts.catalog');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');




Route::get('/categories',[CategoryController::class,'index']);
//Route::get('/user/profile',[\Laravel\Fortify\Http\Controllers\ProfileInformationController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/admin', [AdminLoginController::class,'autoAdmin'])->name('admin');
Route::middleware(['auth:sanctum', 'verified'])->post('/admin/edit/user/{id}', [UserController::class,'edit'])->name('admin_edit_user');
Route::get('test', function () {
    return "Admin panel";
})->middleware('auth.basic');
