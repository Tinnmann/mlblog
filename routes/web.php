<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Models\User;
use App\Models\Comment;
use App\Http\Controllers\ArticlesController;

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


Route::post('/articles', [ArticlesController::class, 'store']);

Route::post('/articles/{article}/comments', '\App\Http\Controllers\CommentsController@store');

Route::get('/articles/{article}', [ArticlesController::class, 'show']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard', ['articles'=>Article::orderBy('id', 'DESC')->get()], 
    	['users'=>User::all()]);
})->name('dashboard');


