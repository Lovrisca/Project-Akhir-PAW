<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\CafeController;
use App\Http\Controllers\FacilitiesController;
use App\Http\Controllers\DashboardController;
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

Route::get('/',  [DashboardController::class, 'index']);
Route::get('/all',  [DashboardController::class, 'all']);
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('tryLogin', [LoginController::class, 'tryLogin'])->name('tryLogin');

Route::get('logout', [LoginController::class, 'signOut'])->name('logout')->middleware('auth');
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::view('/', 'dashboardAdmin');
    Route::resource('menu', MenuController::class);
    Route::resource('cafe', CafeController::class);
    Route::resource('facilities', FacilitiesController::class);
});

// Route::get('/a', function() {
//     return "a";
// });
