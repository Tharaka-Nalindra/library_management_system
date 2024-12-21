<?php

use App\Http\Controllers\HomeControlle;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard',[HomeControlle::class,'user'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('admin/dashboard',[HomeControlle::class,'index'])->
middleware(['auth','admin']);

Route::post('/upload_book',[HomeControlle::class,'upload']);
Route::get('/crd',[HomeControlle::class,'opp']);
Route::get('/delete/{id}',[HomeControlle::class,'delete']);
Route::get('/update/{id}',[HomeControlle::class,'update']);
Route::post('/newupdate/{id}',[HomeControlle::class,'newupdatedata']);
Route::get('/search',[HomeControlle::class,'serchfun']);
