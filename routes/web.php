<?php


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

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [ MainController::class,'home'])->name('home');

Route::get('/articles', [ MainController::class,'index']) ->name('articles');
Route::get('/articles{article:slug}', [MainController::class,'show']) ->name('article');

Auth::routes();

Route::prefix('admin')->group(function(){
    Route::get('/articles', [ArticleController::class, 'index'])->middleware('admin')->name('articles.index');
    Route::get('/articles/create', [ArticleController::class, 'create'])->middleware('admin')->name('articles.create');
    Route::post('/articles/store', [ArticleController::class, 'store'])->middleware('admin')->name('articles.store');
    Route::delete('/articles/{article}/delete}', [ArticleController::class, 'delete'])->middleware('admin')->name('articles.delete');
    Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->middleware('admin')->name('articles.edit');
    Route::put('/articles/{article}/update', [ArticleController::class, 'update'])->middleware('admin')->name('articles.update');
    });

