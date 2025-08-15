<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TrackController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/students/create',[StudentController::class,'create'])->name('students.create');
Route::post('/students/store',[StudentController::class,'store'])->name('students.store');
Route::get('/students',[StudentController::class,'index'])->name('students.index');
// Route::get('/students/{id}',[StudentController::class,'view'])->name('students.view')->middleware('test');
Route::get('/students/{id}',[StudentController::class,'view'])->name('students.view');
Route::delete('/students/{id}',[StudentController::class,'destroy'])->name('students.destroy');



Route::resource('/tracks',TrackController::class);
Route::resource('/subjects',SubjectController::class);
Route::get('/test',function(){
    return view('testui');
});

Route::middleware(['test','auth'])->group(function () {
Route::get('/students/update/{id}',[StudentController::class,'update'])->name('students.update');
Route::put('/student/edit/{id}',[StudentController::class,'edit'])->name('students.edit');
});
