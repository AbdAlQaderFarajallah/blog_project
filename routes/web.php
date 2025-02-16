<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'homepage']);
Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])
//         ->name('profile.edit');
//     Route::get('/profile', [ProfileController::class, 'update'])
//         ->name('profile.update');
//     Route::get('/profile', [ProfileController::class, 'destroy'])
//         ->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

Route::get('/post_page', [AdminController::class, 'post_page']);
Route::post('/add_post', [AdminController::class, 'add_post']);
Route::get('/show_post', [AdminController::class, 'show_post']);
Route::get('/delete_post/{id}', [AdminController::class, 'delete_post']);
Route::post('/edit_page/{id}', [AdminController::class, 'edit_page']);
Route::get('/update_post/{id}', [AdminController::class, 'update_post']);
Route::get('/post_details/{id}', [HomeController::class, 'post_details']);
Route::get('/create_post', [HomeController::class, 'create_post'])->middleware('auth');
Route::post('/user_post', [HomeController::class, 'user_post'])->middleware('auth');;
Route::get('/my_posts', [HomeController::class, 'my_posts'])->middleware('auth');
Route::get('/my_post_delete/{id}', [HomeController::class, 'my_post_delete'])->middleware('auth');
Route::get('/update_post/{id}', [HomeController::class, 'update_post'])->middleware('auth');
Route::get('/update_post_data/{id}', [HomeController::class, 'update_post_data'])->middleware('auth');
Route::get('/accept_post/{id}', [AdminController::class, 'accept_post']);
Route::get('/reject_post/{id}', [AdminController::class, 'reject_post']);
