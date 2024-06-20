<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController, App\Http\Controllers\AdminController;


Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'redirect'])->name('ss');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect('home');
    })->name('dashboard');
});

Route::get('/add_doctor', [AdminController::class, 'addview']);

Route::post('/upload_doctor', [AdminController::class, 'upload']);

Route::post('/appointment', [HomeController::class, 'appointment']);

Route::get('/myappointment', [HomeController::class, 'myappointment']);

Route::get('/cancel_appoint/{id}', [HomeController::class, 'cancel_appoint']);

Route::get('/approve/{id}', [AdminController::class, 'approve']);

Route::get('/cancel/{id}', [AdminController::class, 'cancel']);


Route::get('/showappointment', [AdminController::class, 'showappointment']);

Route::get('/showdoctors', [AdminController::class, 'showdoctors']);

Route::get('/deletedoctor/{id}', [AdminController::class, 'deletedoctor']);

Route::get('/updatedoctor/{id}', [AdminController::class, 'updatedoctor']);

Route::post('/editdoctor/{id}', [AdminController::class, 'editdoctor']);