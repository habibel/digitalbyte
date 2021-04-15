<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\DashboardController;
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


Route::get('/' , [HomeController::class , 'index'])->name('index');
Route::get('/blog' , [HomeController::class , 'blog'])->name('blog');
Route::get('/post/{id}' , [HomeController::class , 'show_post'])->name('show.post');
Route::get('/newsletter' , [DashboardController::class , 'index_newsletter'])->name('newsletter');
Route::POST('/subscribe' , [HomeController::class , 'store_newsletter'])->name('newsletter.store');

Route::POST('/send' , [HomeController::class , 'contact_send'])->name('contact.us');

Route::resource('/project', ProjectController::class);
Route::resource('/post', postController::class);
Route::resource('/team', TeamController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class , 'dashboard'])->name('dashboard');

Route::get('/message' , function (){
    return view('emailing.index');
});