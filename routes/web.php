<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('index');
});


Route::post('/contact', [ContactController::class, 'sendMail'])->name('contact.send');


