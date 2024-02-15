<?php

use App\Http\Controllers\TodayController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'index')->middleware('guest')->name('index');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::middleware('auth')->group(function () {
    Route::get('/today', [TodayController::class, 'index'])->name('today');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('grades', GradeController::class, ['except' => ['create']])->names('grades');
    Route::resource('grades.groups', GroupController::class, ['exept' => ['index']])->names('groups');
    Route::resource('grades.groups.students', StudentController::class, ['exept' => ['index']])->names('students');

});

require __DIR__ . '/auth.php';
