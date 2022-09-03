<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;

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

Route::get('/', [HomeController::class, "index"])->name('dashboard');

Route::prefix('projects')->group(function () {
    Route::get('/', [ProjectController::class,'index'])->name("projects");
    // Route::post('/store', [ProductController::class,'store'])->name("product.store");
    // Route::get('/{item_id}/delete', [ProductController::class,'delete'])->name("product.delete");
    // Route::get('/{item_id}/status', [ProductController::class,'status'])->name("product.status");

    // Route::post('/{item_id}/update', [ProductController::class,'update'])->name("product.update");
    // Route::get('/edit', [ProductController::class,'edit'])->name("product.edit");
});

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
