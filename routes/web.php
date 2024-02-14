<?php

use App\Http\Controllers\TodayController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
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

Route::view('/', 'index')->middleware('guest')->name('index');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::middleware('auth')->group(function () {
    Route::get('/today', [TodayController::class, 'index'])->name('today');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('grades', GradeController::class)->names('grades');
    Route::resource('grades.groups', GroupController::class)->names('groups');
    Route::resource('grades.groups.students', StudentController::class)->names('students');

});

require __DIR__ . '/auth.php';
