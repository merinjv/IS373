<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Posts as LiveWirePosts;
use App\Http\Livewire\Pages as LiveWirePages;

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
})->name('home');

Route::get('/posts/',[\App\Http\Controllers\PostsController::class, 'index'])->name('posts_index_public');
Route::get('/posts/{id}',[\App\Http\Controllers\PostsController::class, 'show'])->name('posts_show_public');

Route::get('/pages/',[\App\Http\Controllers\PagesController::class, 'index'])->name('pages_index_public');
Route::get('/pages/{id}',[\App\Http\Controllers\PagesController::class, 'show'])->name('pages_show_public');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $user = Auth::user();
    $posts = $user->posts();
    return view('dashboard', compact('posts'));
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('pages_admin', LiveWirePages::class)->name('page');
Route::middleware(['auth:sanctum', 'verified'])->get('posts_admin', LiveWirePosts::class)->name('post');
//Route::get('page', Pages::class)->name('page');
