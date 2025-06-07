<?php

use App\Http\Controllers\admin\HewanController as AdminHewanController;
use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('home');
});


Route::get('login-page', [AuthController::class, 'login_page'])->name('auth.login-page');

Route::post('login', [AuthController::class, 'login'])->name('auth.login');
Route::post('logout', [AuthController::class, 'logout'])->name('auth.logout');


Route::prefix('petugas')->middleware(['auth'])->as('petugas.')->group(function () {
    Route::get('dashboard', function () {
        return view('petugas.dashboard.index');
    })->name('dashboard.index');

    Route::resource('hewan', AdminHewanController::class);
});
