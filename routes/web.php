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

Route::middleware('auth')->prefix('admin')->group(function(){
    Route::resource('articles', ArticleController::class)->except([
        'show'
    ]);
    });

