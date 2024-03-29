<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GameController;
use App\Models\Article;
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

Route::get('/blog', function () {
    $articles = Article::all();

    return view('blog', compact('articles'));
});

Route::resource('game', GameController::class);

Route::resource('blog', ArticleController::class);
