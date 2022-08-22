<?php
//admin
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/welcome', [HomeController::class, 'welcome']);

//admin login
Route::get('/admin', [LoginController::class, 'index']);
Route::get('/admin/reset-password', [LoginController::class, 'reset']);
