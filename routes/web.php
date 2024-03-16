<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::get("/", [GuestController::class, 'index']);
Route::get("/home", [GuestController::class, 'index']);
Route::get("/signin", [GuestController::class, 'login123q1222']);
Route::get("/signup", [GuestController::class, 'register']);
Route::get("/gallery", [GuestController::class, 'gallery']);

Route::get('login123', [GuestController::class, 'login123123']);

Route::get('form_submit', [GuestController::class, 'login_submit']);

Route::post('register_submit', [GuestController::class, 'register_form_submit']);
