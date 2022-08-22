<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', [HomeController::class, 'login']);
Route::post('register', [HomeController::class, 'register']);

Route::middleware(['auth:sanctum'])->group(function(){
    Route::post('logout', [HomeController::class, 'logout']);
});
