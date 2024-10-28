<?php


use Illuminate\Support\Facades\Route;
use Sagacious\Contactform\Http\Controllers\ContactFormController;

Route::middleware(['guest', 'web'])->group(function () {
Route::get('/contact',[ContactFormController::class,'create']);
Route::post('/submit/message',[ContactFormController::class,'store'])->name('submit.message');
});