<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FoodController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/redirects', [HomeController::class, 'redirects'])->name('redirects');

Route::get('/users', [AdminController::class, 'users'])->name('users');

Route::get('/deleteusers/{id}', [AdminController::class, 'deleteusers'])->name('deleteusers');

Route::get('/foods', [FoodController::class, 'foods'])->name('foods');

Route::post('/uploadfood', [FoodController::class, 'uploadfood'])->name('uploadfood');
Route::get('/deletefood/{id}', [FoodController::class, 'deletefood'])->name('deletefood');

Route::get('/editfood/{id}', [FoodController::class, 'editfood'])->name('editfood');
Route::post('/editfood/{id}', [FoodController::class, 'updatefood'])->name('updatefood');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
