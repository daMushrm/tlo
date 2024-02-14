<?php

use App\Http\Controllers\CalenderController;
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
    Route::get('/calendar', [CalenderController::class, 'index'])->name('calendar');
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('grades', GradeController::class)->names(['store' => 'grades.store', 'index' => 'grades.index']);;
    Route::resource('grades.groups', GroupController::class)->names(['store' => 'groups.store', 'index' => 'groups.index']);;
    Route::resource('grades.groups.students', StudentController::class)->names(['store' => 'students.store', 'index' => 'students.index']);;

});

require __DIR__ . '/auth.php';
