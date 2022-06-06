<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});


Route::get('register',[registerController::class,'register']);
Route::get('login',[registerController::class,'login'])->name('login');

Route::post('register/form', [registerController::class, 'register_form'])->name('register/form');

Route::post('login/form', [registerController::class, 'login_form'])->name('login/form');
