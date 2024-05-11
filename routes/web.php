<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TypeRequestController;
use App\Http\Controllers\CardRequestController;
use App\Http\Controllers\RequestsController;
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
    return view('auth.login');

});

//Route::get('user', function () {
   // return view('users.user');
//});
Route::resource('users', UserController::class);
Route::resource('requests',RequestsController ::class);
Route::get('/users/user', function () {
    return view('/users/user');
})->middleware(['auth', 'verified'])->name('user');
Route::get('/redirects', [HomeController::class,"index"]);

//Route::get('/user', function () {
 //return view('user');
//})->middleware(['auth', 'verified'])->name('user');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth', 'admin']);
require __DIR__.'/auth.php';


Route::resource('card',CardRequestController::class);
Route::resource('Request',TypeRequestController::class);
Route::resource('Domand',RequestsController::class);