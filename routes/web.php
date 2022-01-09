<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
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

route::get('/',[PagesController::class,'index']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/blog', [PostsController::class, 'index'])->name('blog');
Route::get('/blog/create', [PostsController::class, 'create'])->name('blog');
Route::post('/blog/store', [PostsController::class, 'store'])->name('blog');
Route::get('/blog/{slug}', [PostsController::class, 'show'])->name('blog.show');


