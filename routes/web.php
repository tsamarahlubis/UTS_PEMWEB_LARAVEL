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

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Website\Article\ArticleController;
use App\Http\Controllers\Website\Contact\ContactController;
use Illuminate\Support\Facades\Route;

if($this->app->environment('production')) {
    \URL::forceScheme('https');
}

Route::get('/login', [LoginController::class, 'index'])->name('auth.login');
Route::post('/login', [LoginController::class, 'store'])->name('auth.login.process');
Route::get('/logout', [LoginController::class, 'logout'])->name('auth.logout');

Route::get('/article/{slug}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/', [ArticleController::class, 'index'])->name('article.index');
Route::get('/category/{slug}', [ArticleController::class, 'category'])->name('article.category');
Route::get('/search', [ArticleController::class, 'search'])->name('article.search');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::post('/subscribe/store', [ContactController::class, 'subscribe'])->name('subscribe.store');

// clear cache di shared hosting
Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "Cleared!"; 
 });