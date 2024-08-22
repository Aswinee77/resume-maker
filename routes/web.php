<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
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

Route::any('/', [WebsiteController::class,'login']);
Route::any('/register', [WebsiteController::class,'register']);

Route::any('/dashboard', [WebsiteController::class,'dashboard']);
Route::any('/logout', [WebsiteController::class,'logout']);
Route::any('/viewall', [WebsiteController::class,'viewall']);
Route::any('/view/{id}',[WebsiteController::class,'view']);