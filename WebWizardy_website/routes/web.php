<?php

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
    return view('index');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/past_projects', function () {
    return view('past_projects');
});

Route::get('/order_now', function () {
    return view('order_now');
});

// lihat nanti
// Route::get('/about_us', function () {
//     return view('about_us');
// });

Route::get('/admins', function () {
    return view('NiceAdmin.admin-index');
});

Route::get('/admin-requirements', function () {
    return view('admin-requirements');
});
Route::get('/admin-progress', function () {
    return view('admin-progress');
});
Route::get('/admin-feedbacks', function () {
    return view('admin-feedbacks');
});
Route::get('/admin-project-details', function () {
    return view('admin-project-details');
});

Route::get('/components-progress', function () {
    return view('NiceAdmin.components-progress');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
