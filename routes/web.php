<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');


Route::get('/', function () {
    return view('home');
});

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

Route::get('/about', [ App\Http\Controllers\AboutController::class, 'index'])->name('about');

Route::get('/projects/add', [App\Http\Controllers\ProjectController::class, 'add'])->name('project.add');

Route::get('/projects', [ App\Http\Controllers\ProjectController::class, 'index' ])->name('project.index');

Route::get('/projects/show', [App\Http\Controllers\ProjectController::class, 'show'])->name('project.show');

require __DIR__.'/auth.php';