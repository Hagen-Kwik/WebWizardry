<?php

use App\Http\Controllers\FeedbacksController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\RequirementsController;
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



// lihat nanti
// Route::get('/about_us', function () {
//     return view('about_us');
// });


// requriements
Route::get('/admin-requirements/{projectId}', [RequirementsController::class, 'create'])->middleware(['auth']);
Route::put('/requirements/{id}/{projectId}/update-status', [RequirementsController::class, 'updateStatus'])->name('update.requirement.status');
Route::post('/requirements/{id}/add-requirement', [RequirementsController::class, 'addRequirement'])->name('add.requirement');

// feedbacks
Route::get('/admin-feedbacks/{projectId}', [FeedbacksController::class, 'create'])->middleware(['auth']);
Route::post('/admin-feedbacks/{projectId}', [FeedbacksController::class, 'reply'])->middleware(['auth'])->name('feedback.store');
Route::post('/feedbacks/{id}/add-feedback', [FeedbacksController::class, 'addFeedback'])->middleware(['auth'])->name('add.feedbacks');

// project details
Route::get('/admin-project-details/{projectId}', [ProjectsController::class, 'details'])->middleware(['auth']);
Route::post('/admin-project-details/{projectId}', [ProjectsController::class, 'uploadPaymentImage'])->middleware(['auth'])->name('upload.payment.image');
Route::post('/admin-project-details/{projectId}/approve-payment', [ProjectsController::class, 'approve_payment'])->middleware(['auth'])->name('approve.payment');


Route::get('/components-progress', function () {
    return view('NiceAdmin.components-progress');
});

// progress
Route::get('/admin-progress/{projectId}', [ProjectsController::class, 'showOne'])->middleware(['auth'])->name('project.details');
Route::post('/save/project/{projectId}', [ProjectsController::class, 'save'])->name('save.project.links');


Route::get('/order_now', [ProjectsController::class, 'order_page_show'])->middleware(['auth']);
Route::post('/project_ordered', [ProjectsController::class, 'order'])->middleware(['auth'])->name('order.project');
Route::get('/dashboard', [ProjectsController::class, 'showAll'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
