<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BooksControllers;
use App\Http\Controllers\RegisterController;

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


Route::get('/', function()
{
    return view('home', [
        'title' => 'Welcome'
    ]);
});

Route::get('/posts', [BooksControllers::class, 'index']);

Route::get('/posts/{post:slug}', [BooksControllers::class, 'show']);


Route::get('/categories', function()
{
    return view('categories', [
        'title' => 'Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/authors', function()
{
    return view('authors', [
        'title' => 'Authors',
        'authors' => User::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);