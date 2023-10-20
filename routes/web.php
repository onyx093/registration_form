<?php

use App\Http\Controllers\RegisterUserController;
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

Route::redirect('/', '/registerForm');

Route::get('/registerForm', [RegisterUserController::class, 'registrationForm'])->name('registrationForm');
Route::post('/register', [RegisterUserController::class, 'store'])->name('register');
// Route::middleware('guest')->group(function(){
// });
