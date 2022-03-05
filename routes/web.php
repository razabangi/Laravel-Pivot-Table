<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
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

Route::get('/add-tags', [TagController::class, 'create']);
Route::get('/posts/{id}', [PostController::class, 'create']);
Route::get('/posts/sync/{id}', [PostController::class, 'add_by_sync']);
Route::get('/posts/delete/{id}', [PostController::class, 'delete']);
Route::get('/posts', [PostController::class, 'show']);
