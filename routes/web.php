<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Article;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
Route::get('/login', [UserController::class, 'login']);
Route::post('/auth', [UserController::class, 'authentication']);


// Route::get('/', function () {
//     return redirect()->route('posts.index');
// });


Route::resource('posts', PostController::class);
Route::get('/parenting', [PostController::class, 'parenting']);
Route::get('/46', [PostController::class, 'mon']);
Route::get('/biaya', [PostController::class, 'biaya']);
Route::get('/dady', [PostController::class, 'dady']);
Route::get('/about', [PostController::class, 'about']);
Route::get('/mom', [PostController::class, 'mom']);
Route::get('/events', [PostController::class, 'events']);
Route::get('/contact', [PostController::class, 'contact']);
Route::get('/search', [PostController::class, 'search'])->name('search');

Route::get('/create/create', [ArtikelController::class, 'create']);
Route::post('/create/store', [ArtikelController::class, 'store']);
Route::get('/show', [ArtikelController::class, 'index']);

Route::get('/admin/dashboard', [ArticleController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/create', [ArticleController::class, 'create'])->name('admin.create');
Route::post('/admin/store', [ArticleController::class, 'store'])->name('admin.store');
Route::get('/admin/edit/{id}', [ArticleController::class, 'edit'])->name('admin.edit');
Route::put('/admin/update/{id}', [ArticleController::class, 'update'])->name('admin.update');

Route::delete('/admin/delete/{id}', [ArticleController::class, 'destroy'])->name('admin.delete');

// Route::put('/profle/update', [ArticleController::class, 'setting']);
Route::get('/profle/update', [ArticleController::class, 'setting']);


