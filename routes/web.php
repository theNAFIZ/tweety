<?php

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

Route::middleware('auth')->group(function () {
    Route::get('/tweets', [App\Http\Controllers\TweetController::class, 'index'])->name('home');
    Route::post('/tweets', [App\Http\Controllers\TweetController::class, 'store'])->name('create-tweet');
});

// Profile Routes

Route::get('/users/{user:username}', [\App\Http\Controllers\ProfilesController::class, 'index'])->name('view-profile');
Route::post('/users/{user:username}/follow', [\App\Http\Controllers\ProfilesController::class, 'follow'])->name('follow-profile');
Route::get('/users/{user:username}/edit', [\App\Http\Controllers\ProfilesController::class, 'edit'])->name('edit-profile');
Route::patch('/users/{user:username}/edit', [\App\Http\Controllers\ProfilesController::class, 'update'])->name('update-profile');


Auth::routes();
