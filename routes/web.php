<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, "index"]);
Route::post("/", [HomeController::class, "create"]);
Route::get("success/{id}", [HomeController::class, "success"]);
Route::get("download/{id}", [HomeController::class, "download"]);
Route::get("verify/{id}", [HomeController::class, "verify"]);
Route::get("admin", [AdminController::class, "index"]);
Route::post("admin", [AdminController::class, "present"]);
