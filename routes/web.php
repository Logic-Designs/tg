<?php

use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('admin/login',[AdminAuthController::class, 'getLogin'])->name('adminLogin');
Route::post('admin/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
Route::get('admin/logout', [AdminAuthController::class, 'logout'])->name('adminLogout');

// Route for the home page
Route::get('/', [FrontController::class, 'index'])->name('home');

// Route for the about page
Route::get('/about', [FrontController::class, 'about'])->name('about');

// Routes for development pages
Route::get('/developments', [FrontController::class, 'development'])->name('developments');
Route::get('/developments/{development}', [FrontController::class, 'singleDevelopment'])->name('single-development');

// Routes for media pages
Route::get('/media', [FrontController::class, 'media'])->name('media');
Route::get('/media/{media}', [FrontController::class, 'singleMedia'])->name('single-media');

// Routes for careers page and form submission
Route::get('/careers', [FrontController::class, 'careers'])->name('careers');
Route::post('/careers', [FrontController::class, 'storeCareer'])->name('store-career');

// Routes for contact page and form submission
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::post('/contact', [FrontController::class, 'storeContact'])->name('store-contact');

require __DIR__.'/auth.php';
