<?php


use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, ('homepage')])->name('homepage');
Route::get('/create/article', [ArticleController::class, 'create'])->name('create.article');
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');

// article show 
 Route::get('/show/article/{article}', [ArticleController::class, 'show'])->name('article.show');

// categorie
Route::get('/category/{category}', [ArticleController::class, 'byCategory'])->name('byCategory');

// user revisore
Route::get('/revisor/index', [RevisorController::class,'index'])->middleware('isRevisor')->name('revisor.index');
Route::patch('/accept/{article}', [RevisorController::class, 'accept'])->name('accept');
Route::patch('/reject/{article}', [RevisorController::class, 'reject'])->name('reject');

// invio mail 

Route::get('/revisor/request', [RevisorController::class,'becomeRevisor'])->middleware('auth')->name('become.revisor');
Route::get('/make/revisor/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');

// ricerca 

Route::get('/search/article',[PublicController::class,'searchArticles'])->name('article.search');

