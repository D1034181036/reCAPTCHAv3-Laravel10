<?php

use Illuminate\Support\Facades\Route;
use App\Http\Requests\RecaptchaRequest;

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
    return view('welcome');
});

Route::get('/recaptcha', function() {
    return view('recaptcha-v3');
})->name('recaptcha.index');

Route::post('/recaptcha', function(RecaptchaRequest $request) {
    return "Verification Success";
})->name('recaptcha.process');
