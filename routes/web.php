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
Route::get("/signin", [GuestController::class, 'login']);
Route::get("/signup", [GuestController::class, 'register']);
Route::get("/gallery", [GuestController::class, 'gallery']);
